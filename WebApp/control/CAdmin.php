<?php

class CAdmin {

    public static function login(){

        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance();
        }
        
        if(USession::isSetSessionElement('admin')) { //admin is logged direct to homepage
            header('Location: /WebApp/Admin/home');
        }
        $view= new VAdmin();
        $view->showLoginForm();

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
        header('Location: /WebApp/User/Home');
    }

    /**
     * this method show an home page for the admin, if the admin is logged in
     * @return void
     */
    public static function home() {

    $infout=CAdmin::getUserStatus();

    $view = new VAdmin();


    $view->showHomePage($infout);

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
        
        header('Location: /WebApp/Admin/login'); // Redirect to login page if not logged in
        exit();}

        return $logged;
        
    }

    /**
         * check if exist the Username inserted, and for this username check the password. If is everything correct the session is created and
         * the User is redirected in the carDetails page 
         */
    public static function checkLoginRent(){
        $view = new VUser();
        $username = FPersistentManager::getInstance()->verifyUserUsername(UHTTPMethods::post('username'));                                            
        if($username){
            $user = FPersistentManager::getInstance()->retriveUserOnUsername(UHTTPMethods::post('username'));
            if(password_verify(UHTTPMethods::post('password'), $user->getPassword())){

                if(USession::getSessionStatus() === PHP_SESSION_NONE){
                    USession::getInstance();

                }
                USession::setElementInSession('user', $user->getId());
                USession::setElementInSession('username', $user->getUsername());
                $idAuto=USession::getElementFromSession('idAuto');
                $url = "/WebApp/User/selectCarForRent/" . $idAuto;
                header('Location: ' . $url); // Redirect to the cars for rent page

            }else{
                $view->loginError();
            }

        }else{
            $view->loginError();
        }
    }


    public static function addCar() {

        if (CAdmin::isLogged()) {

            $infout=CAdmin::getUserStatus();
            
            $idAdmin = USession::getElementFromSession('admin');
            $admin=FPersistentManager::getInstance()->getObjectbyId(EAdmin::class, $idAdmin);
            
            
            $cardNumber= UHTTPMethods::post('cardNumber');

            $existingMethod=FPersistentManager::getInstance()->verifyCardNumber($cardNumber);
            if (!$existingMethod) {
                $cardName= UHTTPMethods::post('cardName');
                $cardExpiry= UHTTPMethods::post('cardExpiry');
                $cardCVV= UHTTPMethods::post('cardCVV');
                $cardDate=explode("/",$cardExpiry);
                $cardMonth=$cardDate[0];
                $cardYear="20".$cardDate[1];
                $cardExp= new DateTime("$cardYear-$cardMonth-01");  
                $card= new ECreditCard( $cardNumber, $cardExp, $cardCVV, $user);

            }
            else {
                $card=FPersistentManager::getInstance()->retrieveObjectByfield(ECreditCard::class,'cardNumber',$cardNumber);
            }
            $idAuto=USession::getElementFromSession('idAuto');
            $car=FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto);

            $amount=USession::getElementFromSession('amount');
            $startD=USession::getElementFromSession('startDate');
            $endD=USession::getElementFromSession('endDate');
            $start=(new DateTime($startD))->format(DateTime::ATOM);
            $end=(new DateTime($endD))->format(DateTime::ATOM);

                // Store the credit card in the session
            FPersistentManager::getInstance()->uploadObj($card);
            USession::setElementInSession('creditCard', $card->getCardId()); // Persist the credit card
            $view = new VUser();
            $view->showOverview($start,$end,$amount,$car,$infout); //button for confirm o to go back to the form

        } else {
            header('Location: /WebApp/User/Home');
        }
    }

}