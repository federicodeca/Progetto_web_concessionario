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
     * UPLOAD OBJECT
     * upload any Object in the database
     */
    public static function uploadObj($obj){

        $result = FEntityManager::getInstance()->saveObject($obj);

        return $result;
    }

    public static function caricaObj($obj) {
        FEntityManager::getInstance()->caricaObj($obj);
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
        $result = FAdmin::getAdminByUsername($username);

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

    /** 
     * return all cars for rent from the table
     */
    public static function retriveAllRentCars($tabel) {
        $result = FCarForRent::getAllCarsForRent($tabel);
        return $result;
    }

    /**
     * return all cars for sale from the table
     */
    public static function retriveAllSaleCars($table) {
        $result = FCarForSale::getAllCarsForSale($table);
        return $result;
    }

    /**
     * return all cars for sale from the table
     */
    public static function retriveAllAvailableSaleCars($table) {
        $result = FCarForSale::getAllAvailableCarsForSale($table);
        return $result;
    }
    

    /**
     * return the credit card of a user
     */
    public static function retriveCreditCardOnUserId($userId) {
        $result = FCreditCard::getCreditCardByUserId($userId);
        return $result;
    }

    /**
     * TRANSACTION INSERT
     */
    public static function saveObject($obj) {
        $result = FEntityManager::getInstance()->saveObject($obj);
        return $result;
    }

    /**
     * lock table
     * @param string $table
     */
    public static function lockTable($table) {
        FEntityManager::getInstance()->lockTable($table);
    }
    /**
     * unlock table
     * @param string $table
     */
    public static function unlockTable() {
        FEntityManager::getInstance()->unlockTable();
    }


        
    public static function verifyUserUsername($username){
        $result = FPerson::verify('username', $username);

        return $result;
    }

    public static function verifyUserEmail($email){
        $result = FPerson::verify('email', $email);

        return $result;
    }

    public static function verifyCardNumber($cardNumber){
        $result = FCreditCard::verify('cardNumber', $cardNumber);

        return $result;
    }

    public static function getAllCreditCardsByUser($idUser) {
        $user = FEntityManager::getInstance()->retriveObj(EUser::class, $idUser);
        $result = FEntityManager::getInstance()->objectList(ECreditCard::class, 'user', $user);
        return $result;

        }


    public static function retrieveObjectByField($className, $field, $value) {
        $result = FEntityManager::getInstance()->retriveObjOnField($className, $field, $value);
        return $result;
        }


    public static function removeObject($obj):void {
        FEntityManager::getInstance()->deleteObj($obj);
        }   
        

}