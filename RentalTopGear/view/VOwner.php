<?php

class VOwner{

    private $smarty;


    public function __construct(){

        $this->smarty = StartSmarty::configuration();

    }

    public function showOwnerHome($saleOrders, $rentOrders,$rentTotalPerDay,$infout) {
        $this->smarty->assign('saleOrders', $saleOrders);
        $this->smarty->assign('rentOrders', $rentOrders);
        $this->smarty->assign('isLogged', $infout['isLogged']);
        $this->smarty->assign('username', $infout['username']);
        $this->smarty->assign('permission', $infout['permission']);
        $this->smarty->assign('rentMedium', $rentTotalPerDay);
        $this->smarty->display('homeOwner.tpl');
    }

}