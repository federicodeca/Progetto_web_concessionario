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
        
        header('Location: /WebApp/User/login'); // Redirect to login page if not logged in
        exit();}

        return $logged;
        
    }

    /**
     * this method is used to check if the document is verified, if not it will return false
     * @return bool
     */
    public static function DocVerified(): bool {

        $idUser = USession::getElementFromSession('user');
        $user = FPersistentManager::getInstance()->getObjectById(EUser::class, $idUser);
        $license = FPersistentManager::getInstance()->getObjectByField(ELicense::class, 'user_id', $idUser);

        if ($license === null || $user === null) {
            return false;
        }

        if (!$license->checkExpiration()) {
            $user->setVerified(false);
            FPersistentManager::getInstance()->caricaObj($user);
            // Patente scaduta: eliminiamola e resettiamo lo stato dell’utente
            FPersistentManager::getInstance()->removeObject($license);
            
            return false;
        }

        return $user->getIsVerified();
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

                if ($user->getRole()=='admin') {
                USession::setElementInSession('admin', $user->getId());
                USession::setElementInSession('username', $user->getUsername());
                    header('Location: WebApp/Admin/home');
                    exit;
                }    

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




    public static function login(){

        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance();
        }
        
        if(USession::isSetSessionElement('user')) { //user is logged direct to homepage
            header('Location: /WebApp/User/home');
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
     * this method is used to select a cars for rent, it will redirect to the cars details page
     * @param int $carId
     */
    public static function selectCarForRent($idAuto) {

        $infout=CUser::getUserStatus();

        USession::setElementInSession('idAuto', $idAuto); // Store the car ID in the session
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
            if (CUser::DocVerified(USession::getElementFromSession('user'))) { // Check if the user has a verified document

                $infout=CUser::getUserStatus();
 
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

    public static function showOverview() {

        if (CUser::isLogged()) {

            $infout=CUser::getUserStatus();
            
            $idUser = USession::getElementFromSession('user');
            $user=FPersistentManager::getInstance()->getObjectbyId(EUser::class, $idUser);
            
            
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

    public static function confirmRent() {

        if (CUser::isLogged()) {

            $infout=CUser::getUserStatus();

            $startD=USession::getElementFromSession('startDate');
            $endD=USession::getElementFromSession('endDate');
            $start=new DateTime($startD);
            $end=new DateTime($endD);

            $idAuto=USession::getElementFromSession('idAuto');
            
            $car= FPersistentManager::getInstance()->getObjectById(ECarForRent::class, $idAuto);
            $indisp= new EUnavailability($start, $end, $car);

            if ($car->checkAvailability($start,$end)) { //metodo clu
                FPersistentManager::getInstance()::lockTable('cars_for_rent'); // Lock the table to prevent concurrent modifications
                FPersistentManager::getInstance()->saveObject($indisp); //TRANSACTION
                $car->addUnavailability($indisp); // Add the unavailability to the car
                FPersistentManager::getInstance()::unlockTable();
                $now = new DateTime("now", new DateTimeZone("Europe/Rome"));
                
                $idMethod = USession::getElementFromSession('creditCard');
                $method = FPersistentManager::getInstance()->getObjectById(ECreditCard::class, $idMethod);
                $idUser = USession::getElementFromSession('user');
                $user = FPersistentManager::getInstance()->getObjectById(EUser::class, $idUser);
                $amount=USession::getElementFromSession('amount');
                $idUser= USession::getElementFromSession('user');

                $rent= new ERent($now,$method,$user,$indisp,$car);
                $rent->setTotalPrice($amount);
                FPersistentManager::getInstance()->saveObject($rent); // Save the rent object
                 
                $view = new VUser();
                $view->showCarRentConfirmation($rent, $indisp,$infout); // Show confirmation of the car rent
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

            if ($user->getRole()=='admin') {
                echo json_encode([
                    'success' => true,
                    'redirect' => 'WebApp/Admin/home',    
                    ]); 
                USession::setElementInSession('admin', $user->getId());    
            }
            
            else{ 
                echo json_encode([
                    'success' => true,
                    'redirect' => 'WebApp/User/'.$actualMethod,     
                ]);
                USession::setElementInSession('user', $user->getId());
            }    

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

    public static function insertLicense(){



        $infout=CUser::getUserStatus();
        $idUser=USession::getElementFromSession('user');
       
        $user = FPersistentManager::getInstance()->getObjectById(EUser::class, $idUser);
        
        $licenseInserted=$user->getIsVerified(); // Check if the user has already inserted a license
// Check if the user is already verified
        $view =new VUser();
        $view->showLicenseForm($infout,$licenseInserted); // Show the license form if not verified or if the user has not inserted a license yet

    }

    public static function uploadLicense() {


        $infout=CUser::getUserStatus();
        
        $expirationDate = UHTTPMethods::post('exp');
        $expiration= new DateTime($expirationDate, new DateTimeZone("Europe/Rome"));

        $photo= UHTTPMethods::files('photo');
        $blobFile=file_get_contents($photo['tmp_name']);
        $image = new EImage($photo['name'],$photo['size'], $photo['type'],$blobFile);
        FPersistentManager::getInstance()->uploadObj($image);

       
        $user = FPersistentManager::getInstance()->getObjectById(EUser::class, USession::getElementFromSession('user'));
        $user->setVerified(true); // Set the user as verified
        FPersistentManager::getInstance()->uploadObj($user); // Save the user object
        $license= New ELicense($expiration,$image,$user); // Save the image object
        $license->setChecked(true); // !!!!!!!!!!! DA MODIFICARE QUANDO FACCIAMO ADMIN QUESTO é IL CAMPO DI VERIFICA
        FPersistentManager::getInstance()->uploadObj($license); // Save the license object


        $view = new VUser();
        $view->showLicenseConfirm(); // Show success message after uploading the license
    }

}


