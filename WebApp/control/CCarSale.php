<?php

class CCarSale {


    public static function carSearcher(){
        $brandList= FPersistentManager::getInstance()->getAllBrands();
        var_dump($brandList);

        $models=[];
        foreach ($brandList as $brand) {
                $models[$brand]= FPersistentManager::getInstance()->getAllModels($brand);
        }
        var_dump($models);
        $view = new VUser();
        $infout = CUser::getUserStatus();
        $view->showCarSearcher($infout,$models);
    }

    /**
     * this method is used to show the list of cars for sale
     */
    public static function showCarsForSale($currentPage) {
        $carsPerPage = 6;

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        
        if (isset($_GET['brand'])) {
            USession::setElementInSession('brand', $_GET['brand']);
        }else{
            $brand = USession::getElementFromSession('brand');}
            
        if (isset($_GET['model'])) {
            USession::setElementInSession('model', $_GET['model']);
        }else{
            $model = USession::getElementFromSession('model');}

        $offset = ($currentPage - 1) * $carsPerPage;

        
        $filteredCars = FPersistentManager::getInstance()->searchCarsForSale($brand, $model, $offset, $carsPerPage);
        $filteredCarsNumber = FPersistentManager::getInstance()->countSearchedCars($brand, $model);
        $totalPages = ceil($filteredCarsNumber / $carsPerPage);

        $infout = CUser::getUserStatus();
        $view = new VUser();
        $view->showCarsForSale($filteredCars, $infout, $currentPage, $totalPages);
    }

    /**
     * this method is used to select a cars for sale, it will redirect to the car detail page
     * @param int $carId
     */
    public static function selectCarForSale($idAuto) {
        $infout=CUser::getUserStatus();

        USession::setElementInSession('idAuto', $idAuto); // Store the car ID in the session
         // Get the car ID from the request, if not set, it will be null
        $price= FPersistentManager::getInstance()->getObjectbyId(ECarForSale::class, $idAuto)->getPrice();
    
        $car= FPersistentManager::getInstance()->getObjectbyId(ECarForSale::class, $idAuto);
        $view = new VUser();
        $view->showCarSaleDetails($car,$infout,$price);
    } 

    // confirmSale

}