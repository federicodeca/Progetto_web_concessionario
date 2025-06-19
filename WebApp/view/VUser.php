<?php

class VUser{

    private $smarty;


      public function __construct(){

        $this->smarty = StartSmarty::configuration();

    }

    public function showCars($cars,$infout) {
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);

        $this->smarty->assign('cars', $cars);
        $this->smarty->display('carList.tpl');
    }


    public function showLoginForm() {
        $this->smarty->display('loginForm.tpl');
    }
    /**
     * login not required
     */
    public function showHomePage($infout) { 
       
    $this->smarty->assign('isLogged', $infout['isLogged']);  
    $this->smarty->assign('username', $infout['username']);
    $this->smarty->display('home.tpl');


    }
        /**
     * login not required
     */
    public function showCarsForRent($cars,$infout) {
        $this->smarty->assign('cars', $cars);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->display('carsForRentlist.tpl');
       
    }

   
    /**
     * login not required
     */

    public function showCarDetails($car,$indisp,$infout,$surcharges,$basePrice) {
        $this->smarty->assign('indisp', $indisp);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('car', $car);
        $this->smarty->assign('surcharges', $surcharges);
        $this->smarty->assign('basePrice', $basePrice);
        $this->smarty->display('CarDetails.tpl');
    }


    
     public function loginError() {
        $this->smarty->assign('error', 'Invalid username or password');
        $this->smarty->display('loginForm.tpl');
    }



    public function showRegistrationForm() {
        $this->smarty->display('registrationForm.tpl');
    }

    public function showRegistrationSuccess() {
        $this->smarty->assign('message', 'Registration successful! Please log in.');
        $this->smarty->display('registrationSuccess.tpl');
    }

    public function showError($message) {
        $this->smarty->assign('error', $message);
        $this->smarty->display('error.tpl');
    }

    public function showCreditCardForm($amount,$start,$end) {
        $this->smarty->assign('amount',$amount);
        $this->smarty->assign('start',$start);
        $this->smarty->assign('end',$end);
        $this->smarty->display('creditCardForm.tpl');
    }

    public function showDocNotVerified() {
        $this->smarty->assign('error', 'Document not verified. Please verify your documents to proceed.');
        $this->smarty->display('error.tpl');
    }

    public function showOverview($card  ) {
        $this->smarty->assign('card', $card);
        $this->smarty->display('overview.tpl');
        
    }

    public function showCarRentConfirmation($rent, $indisp) {
        $this->smarty->assign('rent', $rent);
        $this->smarty->assign('indisp', $indisp);
        $this->smarty->display('carForRentDetails.tpl');
    }
    public function showErrorUnavailability(){
        $this->smarty->assign('error', 'The car is not available for the selected dates.');
        $this->smarty->display('error.tpl');
    }

    public function showRegistration() {
        $this->smarty->display('registrationForm.tpl');
    }
    public function showSuccessReg() {
        $this->smarty->display('registrationSuccess.tpl');
    }
    
    public function registrationError(){

        $this->smarty->display('registrationError.tpl');
    }



}