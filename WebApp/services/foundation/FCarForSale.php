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

    public static function searchCarsForSale($brand = null, $model = null, $offset = 0, $limit = 6) {
    $sql = "SELECT a.model, a.brand, a.color, a.horsepower, a.displacement, a.seats, a.fuelType,c.price  FROM cars_for_sale c JOIN auto a ON a.idAuto = c.idAuto WHERE available = 1";
    $offset = (int)$offset;
    $limit = (int)$limit;

    if (!empty($brand)) {
            $sql .= " AND brand = '$brand'";
            
        }

    if (!empty($model)) {
            $sql .= " AND model = '$model'";
            
        }

   $sql .= " LIMIT " . intval($limit) . " OFFSET " . intval($offset);
 
    // Usa PDO o mysqli con prepared statements per eseguire la query in sicurezza
    $result= FEntityManager::getInstance()->executeQuery($sql);
    $cars = [];
    foreach ($result as $row) {
        $car = new ECarForSale(
            $row['model'],
            $row['brand'],
            $row['color'],
            (int)$row['horsepower'],
            (int)$row['displacement'],
            (int)$row['seats'],
            $row['fuelType'],
            (int)$row['price']
        );
        // Eventuali altri settaggi (id, immagini, ecc.)
        $cars[] = $car;
    }
    return $cars;
}

    public static function countSearchedCars($brand = null, $model = null) {
    $sql = "SELECT COUNT(*) FROM cars_for_sale WHERE available = 1";
    $params = [];

    if ($brand !== null) {
        $sql .= " AND brand = '$brand";
        $params[] = $brand;
    }

    if ($model !== null) {
        $sql .= " AND model = '$model'";
        $params[] = $model;
    }

    // Esegui la query e restituisci il numero
    $result = FEntityManager::getInstance()->executeQuery($sql, $params);
    return $result[0]['COUNT(*)'] ?? 0;
  
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