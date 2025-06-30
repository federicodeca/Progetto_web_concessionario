<?php

class FSale {

    public static function getSaleOrders($table) {
        $saleOrders = [];
        $saleOrders = FEntityManager::getInstance()->selectAll($table);
    
        return $saleOrders;
    }

}