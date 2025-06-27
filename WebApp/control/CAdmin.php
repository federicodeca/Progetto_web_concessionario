<?php

class CAdmin {

    // DA CONTROLLARE LOGIN, LOGOUT, ISLOGGED

    public static function login(){

        
        if (session_status() === PHP_SESSION_NONE) {
            USession::getInstance();
        }
        
        if(USession::isSetSessionElement('admin')) { //admin is logged direct to homepage
            header('Location: /WebApp/Admin/home');
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
        header('Location: /WebApp/User/home');
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

    // aggiungere auto nel database
    public static function addCar()
    {
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

    public static function showCarForm() {
        $view = new VAdmin();
        $view->showAddCarForm();
    }
}