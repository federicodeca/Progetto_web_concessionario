<?php

class CAdmin {

    // DA CONTROLLARE LOGIN, LOGOUT, ISLOGGED

    public static function login(){

        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance();
        }
        
        if(USession::isSetSessionElement('admin')) { //admin is logged direct to homepage
            header('Location: /RentalTopGear/Admin/home');
        }
        $view= new VAdmin();
        //$view->showLoginForm();

    }

     /**
     * this method can logout the User, unsetting all the session element and destroing the session. Return the user to the Login Page
     * @return void
     */
    public static function logout(){
        USession::getInstance();
        USession::unsetAllElementsInSession();// Unset all session elements
        USession::killSession();
        setcookie('PHPSESSID','',time()-42000); //??
        header('Location: /RentalTopGear/User/home');
    }

    /**
     * this method show an home page for the admin, if the admin is logged in
     * @return void
     */
    public static function home() {
        if (CAdmin::isLogged()) {

        

        $infout=CAdmin::getUserStatus();

        $view = new VAdmin();


        $view->showHomePage($infout);

        }

    }

      /**
     * this method is used to show the user profile, if the user is logged in
     * @return void
     */
    public static function getUserStatus(): array {

    if (session_status() === PHP_SESSION_NONE) USession::getInstance();

    $isLogged = USession::isSetSessionElement('admin'); 
    $username = $isLogged ? USession::getElementFromSession('username') : null;

    return [
        'isLogged' => $isLogged,
        'username' => $username
    ];
}

    /**
     * this method is used to check if the user is logged in, if not it will redirect to the login page
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
        
        header('Location: /RentalTopGear/User/home'); // Redirect to home if not logged in
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

        if (isset($_FILES['carImages']) && !empty($_FILES['carImages']['name'][0])) {
            foreach ($_FILES['carImages']['tmp_name'] as $key => $tmp_name) {
                $name = $_FILES['carImages']['name'][$key];
                $size = $_FILES['carImages']['size'][$key];
                $type = $_FILES['carImages']['type'][$key];
                $imageData = file_get_contents($tmp_name);
                $image = new EImage($name, $size, $type, $imageData);
                $image->setCar($car); // collega l'immagine all'auto
                FPersistentManager::getInstance()->uploadObj($image);
            }
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
    public static function showAllRentCars(){
         if (CAdmin::isLogged()) {
        $cars= FPersistentManager::getInstance()->retriveAllRentCars();
        $infout=CAdmin::getUserStatus();    
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
            $carId = UHTTPMethods::post('car');
            $cars= FPersistentManager::getInstance()->retriveAllRentCars();
            $selectedCar = FPersistentManager::getInstance()->retriveCarOnId($carId);
            $infout=CAdmin::getUserStatus();  
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
            $carId = UHTTPMethods::post('idAuto');
            $start = new DateTime(UHTTPMethods::post('start'));
            $end = new DateTime(UHTTPMethods::post('end'));
            $car = FPersistentManager::getInstance()->retriveCarOnId($carId);
            if(!$car->checkAvailability($start, $end)) {
                
                $view->showOverlappingError();
                
            }
            else{
            $unavailability = new EUnavailability($start, $end, $car);
            FPersistentManager::getInstance()->uploadObj($unavailability);
            
            $view->showSuccessInsert();
            }
        }
    }



}