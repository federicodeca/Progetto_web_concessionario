<?php

class VAdmin{

    private $smarty;


    public function __construct(){

        $this->smarty = StartSmarty::configuration();

    }

    public function showHomePage($infout) { 
        
        $this->smarty->assign('isLogged', $infout['isLogged']);  
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->display('homeAdmin.tpl');

    }

    public function showAddCarForm() {
        $this->smarty->display('addCarForm.tpl');
    }

    public function showCarSuccess(){
        $this->smarty->display('addCarSuccess.tpl');
    }

    public function showCarError(){
        $this->smarty->assign('title', 'Ops!');
        $this->smarty->assign('para' , "L'auto non è stata inserita correttamente.");
        $this->smarty->display('error.tpl');
    }

    public function showLicenseList($licenses) {
        $this->smarty->assign('licenses', $licenses);
        $this->smarty->display('licenseList.tpl');
    }

    public function showCheckSuccess() {
        $this->smarty->display('licenseCheckSuccess.tpl');
    }

    public function showAllRentCars($cars, $infout) {
        $this->smarty->assign('cars', $cars);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);

        $this->smarty->display('adminRentCars.tpl');
    }

    public function showUnavailabilities($cars,$infout,$unavailabilities, $selectedCar) {
        $this->smarty->assign('unavailabilities', $unavailabilities);
        $this->smarty->assign('selectedCar', $selectedCar);
        $this->smarty->assign('cars', $cars);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        
        $this->smarty->display('adminRentCars.tpl');
    }

    public function showOverlappingError() {
        $this->smarty->assign('title', 'Ops!');
        $this->smarty->assign('para' , "Esiste gia un'altra prenotazione che si sovrappone a quella che stai cercando di inserire.");
        $this->smarty->display('error.tpl');
    }

    public function showSuccessInsert() {
        $this->smarty->assign('title', 'Successo!');
        $this->smarty->assign('para' , "La prenotazione è stata inserita correttamente.");
        $this->smarty->display('success.tpl');
    }
}