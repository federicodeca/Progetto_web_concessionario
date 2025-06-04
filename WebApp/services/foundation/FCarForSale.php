<?php

class FCarForSale {

    public static function getAllCarsForSale($table) {
        $cars = FEntityManager::getInstance()->selectAll($table);
        return $cars;
    }

   

}