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
/** 
 * This method searches for cars for sale based on brand and model. 
 * It returns a paginated list of cars, with an offset and limit for pagination. dql is used to build the query dynamically based on the provided parameters.
 */
public static function searchCarsForSale($brand = null, $model = null, $offset = 0, $limit = 6) {
    $dql = "SELECT c FROM ECarForSale c WHERE c.available = 1";
    $params = [];

    if (!empty($brand)) {
        $dql .= " AND c.brand = :brand";
        $params['brand'] = $brand;
    }

    if (!empty($model)) {
        $dql .= " AND c.model = :model";
        $params['model'] = $model;
    }

    $offset = (int)$offset;
    $limit = (int)$limit;

    return FEntityManager::getInstance()->doQuery($dql, $params, $limit, $offset);
}

    /**
     * This method counts the total number of cars for sale based on the provided brand and model.
     * It returns the total count of cars that match the search criteria.
     */
    public static function countSearchedCars($brand = null, $model = null) {
        $sql = "SELECT COUNT(*) as total FROM cars_for_sale c join auto a on c.idAuto=a.idAuto  WHERE c.available = 1";
        

        if ($brand !== null) {
            $sql .= " AND a.brand = '$brand'";
            
        }

        if ($model !== null) {
            $sql .= " AND a.model = '$model'";
            
        }

        $result = FEntityManager::getInstance()->executeQuery($sql);
        return $result[0]['total'] ?? 0;
    }

    public static function getAllModels($brand) {
        $sql = "SELECT DISTINCT model FROM auto as a JOIN cars_for_sale as c on a.idAuto=c.idAuto WHERE c.available = 1 and a.type= 'car_for_sale' and a.brand = '$brand'";
        
        $result = FEntityManager::getInstance()->executeQuery($sql);
        if (!$result) {
            return [];
        }
        return array_column($result, 'model');
    }

    public static function getAllBrands() {
        $sql = "SELECT DISTINCT brand FROM auto as a JOIN cars_for_sale as c on a.idAuto=c.idAuto WHERE c.available = 1 and a.type= 'car_for_sale'";
        $result = FEntityManager::getInstance()->executeQuery($sql);
        if (!$result) {
            return [];
        }
        return array_column($result, 'brand');
    }

}