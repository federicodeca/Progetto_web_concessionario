<?php

class FRent {

    public static function getRentOrders($table) {
        $rentOrders = [];
        $rentOrders = FEntityManager::getInstance()->selectAll($table);
    
        return $rentOrders;
    }

}