<?php

class VUser{

    private $smarty;


      public function __construct(){

        $this->smarty = StartSmarty::configuration();

    }

    public function showCars($cars,$infout) {
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);

        $this->smarty->assign('cars', $cars);
        $this->smarty->display('carList.tpl');
    }



    /**
     * login not required
     */
    public function showHomePage($infout,$offers) {
    $this->smarty->assign('offers', $offers); 
       
    $this->smarty->assign('isLogged', $infout['isLogged']);  
    $this->smarty->assign('username', $infout['username']);
    $this->smarty->assign('permission', $infout['permission']);
    $this->smarty->display('home.tpl');


    }
        /**
     * login not required
     */
    public function showCarsForRent($cars,$infout) {
        $this->smarty->assign('cars', $cars);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->display('carsForRentlist.tpl');
       
    }

   
    /**
     * login not required
     */

    public function showCarDetails($car,$indisp,$infout,$surcharges,$basePrice) {
        $this->smarty->assign('indisp', $indisp);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
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

    public function showCreditCardForm($amount,$start,$end,$infout,$cards) {
        $this->smarty->assign('amount',$amount);
        $this->smarty->assign('start',$start);
        $this->smarty->assign('end',$end);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->assign('cards', $cards);
    
        $this->smarty->display('creditCardForm.tpl');
    }

    public function showDocNotVerified() {
        $this->smarty->assign('error', 'Document not verified. Please verify your documents to proceed.');
        $this->smarty->display('error.tpl');
    }

    public function showOverview($start,$end,$amount,$car,$infout) {
        $this->smarty->assign('car', $car);
        $this->smarty->assign('start', $start);
        $this->smarty->assign('end', $end);
        $this->smarty->assign('amount', $amount);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);

        $this->smarty->display('overview.tpl');
        
    }

    public function showCarRentConfirmation($rent, $indisp,$infout) {
        $this->smarty->assign('rent', $rent);
        $this->smarty->assign('indisp', $indisp);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->display('confirmRent.tpl');
    }
    public function showErrorUnavailability(){
        $this->smarty->assign('error', 'The car is not available for the selected dates.');
        $this->smarty->display('error.tpl');
    }

    public function showRegistration() {
        $this->smarty->display('registrationForm.tpl');
    }
    public function showSuccessReg() {
        $this->smarty->display('success.tpl');
    }
    
    public function registrationError(){

        $this->smarty->display('registrationError.tpl');
    }
    public function showLicenseForm($infout,$licenseInserted){

        $this->smarty->assign('licenseInserted', $licenseInserted);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->display('licenseForm.tpl');
    }
    public function showLicenseConfirm(){
        $this->smarty->display('success.tpl');

    }

    public function showLoginForm() {
        $this->smarty->display('loginForm.tpl');
    }

    public function showLicenseRequest() {

        $this->smarty->display('needLicense.tpl');
    }

// ======================== CAR SALE ========================

    public function showCarsForSale($filteredCars, $infout,$totalPages, $currentPage,$models) {
        $this->smarty->assign('filteredCars', $filteredCars);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->assign('currentPage', $currentPage);
        $this->smarty->assign('totalPages', $totalPages);
        $this->smarty->assign('models', $models);
        $this->smarty->display('carsForSaleList.tpl');
    }

    /**
     * login not required
     */

    public function showCarSaleDetails($car,$infout,$amount) {
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->assign('amount', $amount);
        $this->smarty->assign('car', $car);
        
        $this->smarty->display('carDetailsSale.tpl');
    }

    public function showCarSearcher($infout, $models) {
        $this->smarty->assign('models', $models);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->display('carSearcher.tpl');
    }

    public function showCreditCardFormSale($amount,$car, $infout,$cards) {
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->assign('car', $car);
        $this->smarty->assign('amount', $amount);
        $this->smarty->assign('cards', $cards);
        $this->smarty->display('creditCardFormSale.tpl');
    }

    public function showOverviewSale( $amount,$car, $infout) {
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->assign('car', $car);
        $this->smarty->assign('amount', $amount);
        $this->smarty->display('saleOverview.tpl');
    }
    public function showSaleConfirmation($sale, $infout) {
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);

        $this->smarty->assign('sale', $sale);
        $this->smarty->display('confirmSale.tpl');
    }
}