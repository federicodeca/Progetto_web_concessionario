<?php

class FCarForSale {

    public static function getAllCarsForSale($table) {
        $cars = FEntityManager::getInstance()->selectAll($table);
        if (!$cars) {
            return [];
        }
        return $cars;
    }

   public static function getAllAvailableCarsForSale($table) {
        $cars = FEntityManager::getInstance()->selectAll($table);
        if (!$cars) {
            return [];
        }
        $availableCars = [];
        foreach ($cars as $car) {
            if ($car->isAvailable()) {
                $availableCars[] = $car;
            }
        }
        return $availableCars;
    }

}