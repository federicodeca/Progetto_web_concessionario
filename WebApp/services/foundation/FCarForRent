<?php

class FCarForRent {


    /**
     * Get all cars available for rent from the database.
     *
     * @param string $table The name of the table containing car rental data.
     * @return array An array of cars available for rent.
     */
    public static function getAllCarsForRent($table) {
        $cars = FEntityManager::getInstance()->selectAll($table);
        if (empty($cars)) {
            throw new Exception("No cars available for rent.");
        }
        return $cars;
    }
    public static function getAllIndispDates($IdAuto) {
        $indispDates = FEntityManager::getInstance()->objectList('unavailaibilities', 'id_auto', $IdAuto);
        if (empty($indispDates)) {
            throw new Exception("No unavailable dates found for this car.");
        }
        return $indispDates;
    }

}