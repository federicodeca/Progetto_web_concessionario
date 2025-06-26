<?php

class CCarSale {


    public static function carSearcher(){
        $brandList= FPersistentManager::getInstance()->getAllBrands();
       

        $models=[];
        foreach ($brandList as $brand) {
                $models[$brand]= FPersistentManager::getInstance()->getAllModels($brand);
        }
        
        $view = new VUser();
        $infout = CUser::getUserStatus();
        $view->showCarSearcher($infout,$models);
    }

    /**
     * this method is used to show the list of cars for sale
     */
    public static function showCarsForSale($currentPage) {

        $brandList= FPersistentManager::getInstance()->getAllBrands();
       

        $models=[];
        foreach ($brandList as $brand) {
                $models[$brand]= FPersistentManager::getInstance()->getAllModels($brand);
        }

        $carsPerPage = 6;

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $price = UHTTPMethods::post('price') ?? null;
        $brand = UHTTPMethods::post('brand') ?? null;
        $model = UHTTPMethods::post('model') ?? null;

        if (isset($brand)) {
            USession::setElementInSession('brand', $brand);
        }else{
            $brand = USession::getElementFromSession('brand');}
            
        if (isset($model)) {
            USession::setElementInSession('model', $model);
        }else{
            $model = USession::getElementFromSession('model');}
        if (isset($price)) {
            USession::setElementInSession('price', $price);
        }else{
            $price = USession::getElementFromSession('price');}

        $offset = ($currentPage - 1) * $carsPerPage;

        
        $filteredCars = FPersistentManager::getInstance()->searchCarsForSale($brand, $model, $price, $offset, $carsPerPage);
        $filteredCarsNumber = FPersistentManager::getInstance()->countSearchedCars($brand, $model,$price);
        $totalPages = ceil($filteredCarsNumber / $carsPerPage);

        $infout = CUser::getUserStatus();
        $view = new VUser();
        $view->showCarsForSale($filteredCars, $infout, $currentPage, $totalPages, $models);
    }

    /**
     * this method is used to select a cars for sale, it will redirect to the car detail page
     * @param int $carId
     */
    public static function selectCarForSale($idAuto) {
        $infout=CUser::getUserStatus();

        USession::setElementInSession('idAuto', $idAuto); // Store the car ID in the session
         // Get the car ID from the request, if not set, it will be null
        
    
        $car= FPersistentManager::getInstance()->getObjectbyId(ECarForSale::class, $idAuto);
        $view = new VUser();
        $view->showCarSaleDetails($car,$infout);
    } 

    // confirmSale

     public static function loginAndCreditRequirement() {

        if (CCarSale::isLogged()) {

             // Check if the user has a verified document

                $infout=CUser::getUserStatus();
 
                $idAuto= UHTTPMethods::post('idAuto');
           
                $car=FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto);

                $amount=$car->getPrice();
                

                USession::setElementInSession('amount', $amount);

                USession::setElementInSession('idAuto', $idAuto);

 
                $cardList= FPersistentManager::getInstance()->getAllCreditCardsByUser(USession::getElementFromSession('user'));
                $cards=[]; // Array to store card numbers
                foreach($cardList as $card) {
                    $cards[] = $card->getCardNumber();}


                $view = new VUser();
                $view->showCreditCardForm($amount,$start,$end,$infout,$cards);

            } else {

                $view = new VUser();
                $view->showLicenseRequest(); ///da implementare!!!!
            }

        }
    }

