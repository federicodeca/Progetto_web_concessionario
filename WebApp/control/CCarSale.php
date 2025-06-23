<?php

class CCarSale {

    /**
     * this method is used to show the list of cars for sale
     */
    public static function showCarsForSale () {
        $cars = [];
        $cars = FPersistentManager::getInstance()->retriveAllAvailableSaleCars(ECarForSale::class);

        $infout = CUser::getUserStatus();

        $view = new VUser();
        $view->showCarsForSale($cars, $infout);
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