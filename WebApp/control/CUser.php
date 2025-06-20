<?php


class CUser {

    /**
     * this method is used to check if the user is logged in, if not it will redirect to the login page
     * @return void
     */


 

    public static function isLogged(): bool {

        $logged= false;
        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance(); //control PHPSESSID , eventually start session
        }
        
        if(USession::isSetSessionElement('user')) {
            $logged = true; // User is logged in
            
        }
        if(!$logged) {
        
        header('Location: /login.php'); // Redirect to login page if not logged in
        exit();}

        return $logged;
        
    }

        /**
         * this method is used to check if the document is verified, if not it will return false
         * @param object $user
         * 
         */
    public static function DocVerified($idUser): bool {
        return FPersistentManager::getInstance()->getObjectById(EUser::class, $idUser)->getIsVerified();
    }

        /**
         * check if exist the Username inserted, and for this username check the password. If is everything correct the session is created and
         * the User is redirected in the homepage
         */
    public static function checkLoginRent(){
        $view = new VUser();
        $username = FPersistentManager::getInstance()->verifyUserUsername(UHTTPMethods::post('username'));                                            
        if($username){
            $user = FPersistentManager::getInstance()->retriveUserOnUsername(UHTTPMethods::post('username'));
            if(password_verify(UHTTPMethods::post('password'), $user->getPassword())){

                if(USession::getSessionStatus() === PHP_SESSION_NONE){
                    USession::getInstance();
                    USession::setElementInSession('user', $user->getId());
                    USession::setElementInSession('user_name', $user->getNome());
                    header('Location: /WebApp/User/loginAndCreditRequirement');
                }

            }else{
                $view->loginError();
            }

        }else{
            $view->loginError();
        }
    }




    public static function login(){
        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance();
        }
        
        if(USession::isSetSessionElement('user')) { //user is logged direct to homepage
            header('Location: /WebApp/User/Home');
        }
        $view= new VUser();
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


    public static function registration()
    {
        $view = new VUser();
        if(FPersistentManager::getInstance()->verifyUserEmail(UHTTPMethods::post('email')) == false && FPersistentManager::getInstance()->verifyUserUsername(UHTTPMethods::post('username')) == false){
                $user = new EUser(UHTTPMethods::post('name'), UHTTPMethods::post('surname'), UHTTPMethods::post('email'), UHTTPMethods::post('phone'),UHTTPMethods::post('username'), UHTTPMethods::post('password'),UHTTPMethods::post('city'),UHTTPMethods::post('zip'),UHTTPMethods::post('address'));
                $check = FPersistentManager::getInstance()->uploadObj($user);
                if($check){
                    $view->showSuccessReg();
                }
        }else{
                $view->registrationError();
            }
    }


    /**
     * this method show an home page for the user, if the user is logged in
     * @return void
     */
    public static function home() {

    $infout=CUser::getUserStatus();

    $view = new VUser();


    $view->showHomePage($infout);

    }

    /**
     * this method is used to show all the cars for sale in the home page
     */
    public static function showCarsForRent() {

        $infout=CUser::getUserStatus();

        $cars=[];
        $cars= FPersistentManager::getInstance()->retriveAllRentCars(ECarForRent::class);

        $view = new VUser();
        $view->showCarsForRent($cars,$infout);
    }

    /**
     * this method is used to select a cars fot rent, it will redirect to the cars details page
     * @param int $carId
     */
    public static function selectCarForRent($idAuto) {

        $infout=CUser::getUserStatus();


         // Get the car ID from the request, if not set, it will be null
        $indisponibility= FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto)->getAllIndispDates();
        $surchar= FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto)->getAllSurcharges();
        $indisp=[];
        $surcharges=[];
        $basePrice= FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto)->getBasePrice();
        
        foreach($indisponibility as $ind) {
            $indisp[] = [
                'start' => $ind->getStart()->format(DateTime::ATOM),
                'end' => $ind->getEnd()->format(DateTime::ATOM)
            ];
        }
        foreach($surchar as $surcharge) {
            $surcharges[] = [
                'start' => $surcharge->getStart()->format(DateTime::ATOM),
                'end' => $surcharge->getEnd()->format(DateTime::ATOM),
                'price' => $surcharge->getPrice()
            ];
        }
        $car= FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto);
        $view = new VUser();
        $view->showCarDetails($car,$indisp,$infout,$surcharges,$basePrice);
    }


        public static function loginAndCreditRequirement() {

        if (CUser::isLogged()) {
            if (CUser::DocVerified(USession::getElementFromSession('user'))) {
 
                $idAuto= UHTTPMethods::post('idAuto');
                $start=UHTTPMethods::post("startDate");
                $startD=new DateTime($start);

                $end=UHTTPMethods::post("endDate");
                $endD=new DateTime($end);

                $car=FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto);

                $amount=$car->getTotalPrice($startD,$endD);
                

                USession::setElementInSession('amount', $amount);
                USession::setElementInSession('startDate', $startD->format(DateTime::ATOM));
                USession::setElementInSession('endDate', $endD->format(DateTime::ATOM));
                USession::setElementInSession('idAuto', $idAuto);

                $start=$startD->format('d-m-Y');
                $end=$endD->format('d-m-Y');

                $view = new VUser();
                $view->showCreditCardForm($amount,$start,$end);

            } else {
                $view = new VUser();
                $view->showDocNotVerified(); ///da implementare!!!!
            }

        }
    }

    public static function showOverview() {

        if (CUser::isLogged()) {



            $userId = USession::getElementFromSession('user');
            $CardName= UHTTPMethods::post('cardName');
            $CardNumber= UHTTPMethods::post('cardName');
            $CardExpiry= UHTTPMethods::post('cardExpiry');
            $CardCVV= UHTTPMethods::post('cardCVV');
            
            
            $card= new ECreditCard($CardName, $CardNumber, $CardExpiry, $CardCVV,$userId);
            $idAuto=USession::getElementFromSession('idAuto');
            $car=FPersistentManager::getInstance()->getObjectbyId(ECarForRent::class, $idAuto);
            $amount=USession::getElementFromSession('amount');

            USession::setElementInSession('creditCard', $card->getCardId()); // Store the credit card in the session
            FPersistentManager::getInstance()->uploadObj($card); // Persist the credit card
            $view = new VUser();
            $view->showOverview($start,$end,$amount,$car); //button for confirm o to go back to the form
        } else {
            header('Location: /WebApp/User/Home');
        }
    }

    public static function confirmRent() {

        if (CUser::isLogged()) {
            $start=USession::getElementFromSession('startDate');
            $end=USession::getElementFromSession('endDate');
            $idAuto=USession::getElementFromSession('idAuto');
            $indisp= new EUnavailability($start, $end, $idAuto);
            $auto= FPersistentManager::getInstance()->getObjectById(ECarForRent::class, $idAuto);
            if ($auto->checkUnavailability($indisp)) {
                FPersistentManager::getInstance()::lockTable('cars_for_rent'); // Lock the table to prevent concurrent modifications
                FPersistentManager::getInstance()->saveObject($indisp); //TRANSACTION
                $auto->addUnavailability($indisp); // Add the unavailability to the car
                FPersistentManager::getInstance()::unlockTable('cars_for_rent');
                $now = new DateTime("now", new DateTimeZone("Europe/Rome"));
                $now->format('Y-m-d');
                $idMethod = USession::getElementFromSession('creditCard');
                $method = FPersistentManager::getInstance()->getObjectById(ECreditCard::class, $idMethod);
                $idUser = USession::getElementFromSession('user');
                $user = FPersistentManager::getInstance()->getObjectById(EUser::class, $idUser);

                $idUser= USession::getElementFromSession('user');
                $rent= new ERent($now,$method,$user,$indisp,$auto);// Unlock the table after the operation
                FPersistentManager::getInstance()->saveObject($rent); // Save the rent object
                 
                $view = new VUser();
                $view->showCarRentConfirmation($rent, $indisp); // Show confirmation of the car rent
            }
            else {
                $view = new VUser();
                $view->showErrorUnavailability(); // Show error message if the car is not available
                
            }
        }
    }

    /**
     * this method is used to show the user profile, if the user is logged in
     * @return void
     */
    public static function getUserStatus(): array {

    if (session_status() === PHP_SESSION_NONE) USession::getInstance();

    $isLogged = USession::isSetSessionElement('user'); 
    $username = $isLogged ? USession::getElementFromSession('username') : null;

    return [
        'isLogged' => $isLogged,
        'username' => $username
    ];
}

    public static function checkLoginAuto() {
        $view = new VUser();
        $actualMethod= UHTTPMethods::post('actualMethod');
        $user=UHTTPMethods::post('username');
        $password=UHTTPMethods::post('password');
        $user = FPersistentManager::getInstance()->retriveUserOnUsername($user);
        if($user && password_verify($password, $user->getPassword())) {

            if (USession::getSessionStatus() === PHP_SESSION_NONE) {
                USession::getInstance();
            }
            USession::setElementInSession('user', $user->getId());
            USession::setElementInSession('username', $user->getUsername());
            
            echo json_encode([
                'success' => true,
                'redirect' => 'WebApp/User/'.$actualMethod,     
            ]);

        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid username or password'
            ]);
        }
    }
    
    public static function showRegistrationForm() {
        $view = new VUser();
        $view->showRegistration();
    }



}


