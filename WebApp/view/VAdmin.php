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
        $this->smarty->display('addCarError.tpl');
    }

}