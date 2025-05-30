<?php

class FPersistentManager {

    // the variable $instance is used to store the singleton instance of the class
    private static $instance;


    private function __construct() {
        // private constructor to prevent external instantiation
    }

        public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * return object by id
     * @param string $className
     * @param int $id
     */
    public function getObjectById(string $className, int $id) {
        
        $res= FEntityManager::getInstance()->retriveObj($className, $id);
        return $res;
    }

 

    /**
     * return object by field
     * @param string $className
     * @param string $field
     * @param mixed $value
     * @return object|null
     */
    public function getObjectByField(string $className, string $field, $value) {
        
        $res= FEntityManager::getInstance()->retriveObjOnField($className, $field, $value);
        return $res;
    }

    /**
     * upload any Object in the database
     */
    public static function uploadObj($obj){

        $result = FEntityManager::getInstance()->saveObject($obj);

        return $result;
    }



    //USER AND ADMIN
    /**
     * return a User finding it not on the id but on it's username
     * @param string $username
     * @return object|null
     */

    public static function retriveUserOnUsername($username)
    {
        $result = FUser::getUserByUsername($username);

        return $result;
    }


    /**
     * return a Admin finding it not on the id but on it's username
     * @param string $username
     * @return object|null
     */
    public static function retriveAdmOnUsername($username)
    {
        $result = FAdmin::getAdmByUsername($username);

        return $result;
    }


    //CAR
    /**
     * return a car finding it on the id
     * @param int $id
     * @return object|null
     */
    public static function retriveCarOnId($id)
    {
        $result = FAuto::getCarById($id);

        return $result;
    }

    /**
     * return all cars from a table
     * @param string $table
     * @return array
     */
    public static function retriveAllCars($table)
    {
        $result = FAuto::getAllCars($table);

        return $result;
    }



















}