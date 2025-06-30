<?php

class VOwner{

    private $smarty;


    public function __construct(){

        $this->smarty = StartSmarty::configuration();

    }

    public function showOwnerHome($saleOrders, $rentOrders) {
        $this->smarty->assign('saleOrders', $saleOrders);
        $this->smarty->assign('rentOrders', $rentOrders);
        $this->smarty->display('homeOwner.tpl');
    }

}