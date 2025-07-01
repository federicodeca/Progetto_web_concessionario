<?php

class COwner {




    /**
     * this method is used to check if the owner is logged in, if not it will redirect to the user home  page
     * @return void
     */
    public static function isLogged(): bool {

        $logged= false;
        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance(); //control PHPSESSID , eventually start session
        }

        
        if(USession::isSetSessionElement('owner')) {
            $logged = true; // 
            
        }
        if(!$logged) {
        
        header('Location: /RentalTopGear/User/login'); // Redirect to login page if not logged in
        exit();}

        return $logged;
        
    }

    /**
     * this method is used to show the user profile, if the user is logged in
     * @return void
     */
    public static function getOwnerStatus(): array {

        if (session_status() === PHP_SESSION_NONE) USession::getInstance();

        $isLogged = USession::isSetSessionElement('owner'); 
        $username = $isLogged ? USession::getElementFromSession('username') : null;

        return [
            'isLogged' => $isLogged,
            'username' => $username,
            'permission' => 'owner'
        ];
    }

    

    /**
     * this method show an home page for the owner, if the owner is logged in
     * @return void
     */
    public static function home() {
    $saleOrders = [];
    $rentOrders = [];

    
    

    $infout=COwner::getOwnerStatus();

    $saleOrders = FPersistentManager::getInstance()->getSaleOrders(ESale::class);
    $rentOrders = FPersistentManager::getInstance()->getRentOrders(ERent::class);


    $rentTotalPerDay = [];
    foreach ($rentOrders as $order) {
        $date = $order->getOrderDate()->format('Y-m-d');
        if (!isset($rentTotalPerDay[$date])) {
            $rentTotalPerDay[$date] = 0;
        }
        $rentTotalPerDay[$date] += $order->getTotalPrice();
        print_r($rentTotalPerDay);
    }

    $view = new VOwner();
    $view->showOwnerHome($saleOrders, $rentOrders,$rentTotalPerDay,$infout);

    }

}