<?php

class CAdmin {




    /**
     * this method show an home page for the admin, if the admin is logged in
     * @return void
     */
    public static function home() {
        if (CAdmin::isLogged()) {


                $infout=CAdmin::getAdminStatus();

                $view = new VAdmin();

                $view->showHomePage($infout);

        }

    }

      /**
     * this method is used to get info about th status of admin
     * @return void
     */
    public static function getAdminStatus(): array {

        if (session_status() === PHP_SESSION_NONE) USession::getInstance();

        $isLogged = USession::isSetSessionElement('admin'); 
        $username = $isLogged ? USession::getElementFromSession('username') : null; //if is logged..

        return [
            'isLogged' => $isLogged,
            'username' => $username,
            'permission' => 'admin' // permission level for admin
        ];
}

    /**
     * this method is used to check if the admin is logged in, if not it will redirect to the login page
     * @return void
     */
    public static function isLogged(): bool {

        $logged= false;
        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance(); //control PHPSESSID , eventually start session
        }
        
        if(USession::isSetSessionElement('admin')) {
            $logged = true; // User is logged in
            
        }
        if(!$logged) {
        
        header('Location: /RentalTopGear/User/home'); // Redirect to home of user if not logged in
        exit();}

        return $logged;
        
    }

    // aggiungere auto nel database
    public static function addCar()
    {
         if (CAdmin::isLogged()) {
        $view = new VAdmin();

        if (UHTTPMethods::post('carType') == 'rental_car') {
            $car = new ECarForRent(UHTTPMethods::post('carModel'), UHTTPMethods::post('carBrand'), UHTTPMethods::post('carColor'), UHTTPMethods::post('carHorsepower'),UHTTPMethods::post('carDisplacement'), UHTTPMethods::post('carSeats'),UHTTPMethods::post('carFuelType'),UHTTPMethods::post('carPrice'), UHTTPMethods::post('carDescription'));
            $check = FPersistentManager::getInstance()->uploadObj($car);
            
        } elseif (UHTTPMethods::post('carType') == 'car_for_sale') {
            $car = new ECarForSale(UHTTPMethods::post('carModel'), UHTTPMethods::post('carBrand'), UHTTPMethods::post('carColor'), UHTTPMethods::post('carHorsepower'),UHTTPMethods::post('carDisplacement'), UHTTPMethods::post('carSeats'),UHTTPMethods::post('carFuelType'),UHTTPMethods::post('carPrice'), 1, UHTTPMethods::post('condition'));
            $check = FPersistentManager::getInstance()->uploadObj($car);
        }

        $photos= UHTTPMethods::multipleFiles('carImages');
        foreach ($photos as $photo) {
            $blobFile=file_get_contents($photo['tmp_name']);
            $image = new EImage($photo['name'],$photo['size'], $photo['type'],$blobFile);
            $image->setCar($car); // collega l'immagine all'auto
            FPersistentManager::getInstance()->uploadObj($image);
        }

        if ($check) {
            $view->showCarSuccess();
            } else {$view->showCarError(); }
        }    
    }

    /**
     * this method is used to show the form to add a car, if the user is logged in
     */

    public static function showCarForm() {
         if (CAdmin::isLogged()) {
        $view = new VAdmin();
        $view->showAddCarForm();
         }
    }
    //CONTROLLO PATENTE(license check)

    /**
     * this method is used to show all the unchecked license, if the user is logged in
     */

    public static function showLicenseNotChecked () {
         if (CAdmin::isLogged()) {
        $licenseList = [];
        $licenseList= FPersistentManager::getInstance()->getNotCheckedLicense(ELicense::class);

        $view = new VAdmin();
        $view->showLicenseList($licenseList);
         }
    }

    /**
     * this method is used to check a license, if the user is logged in
     * admin has to check if data expiration inserted match with data on the license photo
     */
    
    public  static function checkLicense (int $id) {
         if (CAdmin::isLogged()) {
        $license = FPersistentManager::getInstance()->retriveLicense($id);
        $license->setChecked(true);
        $user = $license->getUserId();
        if ($user) {
            $user->setVerified(true);
        }
        $entityManager = FEntityManager::getEntityManager();
        $entityManager->flush();

        $view = new VAdmin();
        $view->showCheckSuccess();
        }
    }


    //INSERIMENTO PRENOTAZIONE (insert unavailability)

    /**
     * this method is used to show all the cars for rent in the database
     * @return void
     */
    public static function showAllRentCarsForUnavailabilities(){
         if (CAdmin::isLogged()) {
        $cars= FPersistentManager::getInstance()->retriveAllRentCars();
        $infout=CAdmin::getAdminStatus();    
        $view = new VAdmin();
        $view->showAllRentCars($cars, $infout);
        }
    }

    /**
     * this method is used to show the unavailability of a car for rent, if the user is logged in
     * also show all the cars for rent in the database
     */

    public static function showUnavailabilities() {
        if (CAdmin::isLogged()) {


            $carId = UHTTPMethods::postOrNull('idAuto');
            if ($carId === null) {
                $carId=USession::getElementFromSession('idAuto'); // Retrieve carId from session if not provided
            }
            else {
                USession::setElementInSession('idAuto', $carId); // Clear session if carId is provided
            }
            $cars= FPersistentManager::getInstance()->retriveAllRentCars();
            $selectedCar = FPersistentManager::getInstance()->retriveCarOnId($carId);
            $infout=CAdmin::getAdminStatus();  
            $unav=FPersistentManager::getAllValidUnavailabilities($carId);
            $view = new VAdmin();
            $view->showUnavailabilities($cars,$infout,$unav, $selectedCar);
        }
    }
    
    /**
     * this method is used to insert an unavailability for a car for rent, if the user is logged in
     * it checks if the car is available in the selected date range
     */
    public static function insertUnavailability() {
        if (CAdmin::isLogged()) {
            $view = new VAdmin();
            $carId = USession::getElementFromSession('idAuto'); // Retrieve carId from session
            $start = new DateTime(UHTTPMethods::post('start'));
            $end = new DateTime(UHTTPMethods::post('end'));
            $car= FPersistentManager::getInstance()->getObjectByIdLock(ECarForRent::class, $carId); 
            $indisp= new EUnavailability($start, $end, $car);
            if($car->checkAvailability($start, $end)) {
                
                FPersistentManager::getInstance()->uploadObjAndUnlock($indisp);
              
                $view->showSuccessInsert();
                

                
            }
            else{             

                FPersistentManager::getInstance()::unlock();
            
             $view->showOverlappingError();
            }
        }
    }



    public static function deleteUnavailability($id) {
        
        if (CAdmin::isLogged()) {
            $view = new VAdmin();
            $unavailability = FPersistentManager::getInstance()->getObjectById(EUnavailability::class ,$id);
            
            if(FPersistentManager::getInstance()->retrieveObjectByField(ERent::class,'Unavailability', $id) ) {
                $view->showRentError();

                
            }else{
            FPersistentManager::getInstance()->removeObject($unavailability);
            header('location: /RentalTopGear/Admin/showUnavailabilities');
            exit();
            }
        }
    }    
    
    public static function showAllRentCarsForSurcharges() {
        if (CAdmin::isLogged()) {
            $cars= FPersistentManager::getInstance()->retriveAllRentCars();
            $infout=CAdmin::getAdminStatus();    
            $view = new VAdmin();
            $view->showAllRentCarsForSurcharges($cars, $infout);
        }
    }

        public static function showSurcharges() {
        if (CAdmin::isLogged()) {
            $carId = UHTTPMethods::post('car');
            $cars= FPersistentManager::getInstance()->retriveAllRentCars();
            $selectedCar = FPersistentManager::getInstance()->retriveCarOnId($carId);
            $infout=CAdmin::getAdminStatus();  
            $sur=FPersistentManager::getAllValidSurcharges($carId);
            $view = new VAdmin();
            $view->showSurcharges($cars,$infout,$sur, $selectedCar);
        }
    }
    





    public static function insertSurcharge() {
        if (CAdmin::isLogged()) {
            $view = new VAdmin();
            $carId = UHTTPMethods::post('idAuto');
            $start = new DateTime(UHTTPMethods::post('start'));
            $end = new DateTime(UHTTPMethods::post('end'));
            $car = FPersistentManager::getInstance()->retriveCarOnId($carId);
            if($car->checkExistingSurcharges($start, $end)) {
                $surcharge= new ESurcharge($start, $end, UHTTPMethods::post('price'), $car);
                FPersistentManager::getInstance()->saveObject($surcharge); //TRANSACTION
                $view->showSurchargeInsert();
        

            }
            else {
                $view->showOverlappingError();
            }
        }

    }


    public static function selectCar($type) {
        if (CAdmin::isLogged()) {
            USession::setElementInSession('type', $type); // Store the type in session for later use
            if($type === 'Rent') {
                $cars = FPersistentManager::getInstance()->retriveAllRentCars();
            } elseif ($type === 'Sale') {
                $cars = FPersistentManager::getInstance()->retriveAllAvailableSaleCars();
            } else {
                $cars = []; // If type is not recognized, return an empty array 
            }

            $view = new VAdmin();
            $infout=CAdmin::getAdminStatus();
            $view->showCars($cars, $infout);


            
        
        }

    }




}