<?php

class COwner {
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
        
        header('Location: /RentalTopGear/Admin/login'); // Redirect to login page if not logged in
        exit();}

        return $logged;
        
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
     * this method show an home page for the owner, if the owner is logged in
     * @return void
     */
    public static function home() {
    $saleOrders = [];
    $rentOrders = [];

    $saleOrders = FPersistentManager::getInstance()->getSaleOrders(ESale::class);
    $rentOrders = FPersistentManager::getInstance()->getRentOrders(ERent::class);

    $view = new VOwner();
    $view->showOwnerHome($saleOrders, $rentOrders);

    }

}