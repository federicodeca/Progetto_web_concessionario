<?php



class FAuto {

     public static function getCarById($id) {

        $car = FEntityManager::getInstance()->retriveObj(EAuto::class, $id);
        return $car;

    }

    public static function getAllCars($table) {
        $cars = FEntityManager::getInstance()->selectAll($table);
        return $cars;
    }
    
}