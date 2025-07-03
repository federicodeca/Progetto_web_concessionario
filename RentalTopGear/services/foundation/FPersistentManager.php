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
     */
    public function getObjectById(string $className, int $id) {
        
        $res= FEntityManager::getInstance()->retriveObj($className, $id);
        return $res;
    }

    //TRANSAZIONI E LOCKING
    /**
     * return object by id with locking the tuple 
     */
    public function getObjectByIdLock(string $className, int $id) {
        
        $res= FEntityManager::getInstance()->retriveObjLock($className, $id);
        return $res;
    }

    /**
     * upload object and unlock the table
     * this method is used to save an object in the database and unlock the table
     * it is used to prevent concurrent modifications on the same table
     */
    public static function uploadObjAndUnlock($obj) {
        FEntityManager::getInstance()->uploadObjAndUnlock($obj);
    }

    /**
     * lock the table
     * this method is used to unlock the table 
     */
    public static function unlock(){
        FEntityManager::getInstance()->commit();
    }



    /**
     * return object by field
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


    //LOGIN
    /**
     * return a User finding it not on the id but on it's username
     */

    public static function retrivePersonOnUsername($username)
    {
        $result = FPerson::getPersonByUsername($username);

        return $result;
    }
    
    public static function retriveUserOnUsername($username)
    {
        $result = FUser::retriveUserOnUsername($username);

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
    public static function retriveAllRentCars() {
        $result = FCarForRent::getAllCarsForRent(ECarForRent::class);
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
     * return the credit card of a user by id
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





    //LOGIN AND REGISTRATION
    

    /**  
    * verify if the username is already used by another person
    */
    public static function verifyPersonUsername($username){
        $result = FPerson::verify('username', $username);

        return $result;
    }

    /**
     * verify if the username is already used by another user
     */
    public static function verifyUserUsername($username){
        $result = FUser::verify('username', $username);

        return $result;
    }


    //NOLEGGIO AUTO

    /**
     * verify if the card is already inserted in the database
     */
    public static function verifyCardNumber($cardNumber){
        $result = FCreditCard::verify('cardNumber', $cardNumber);

        return $result;
    }

    /**
     * return all credit cards of a user
     */
    public static function getAllCreditCardsByUser($idUser) {
        $user = FEntityManager::getInstance()->retriveObj(EUser::class, $idUser);
        $result = FEntityManager::getInstance()->objectList(ECreditCard::class, 'user', $user);
        return $result;

    }

    /**
     * return an object by field
     */
    public static function retrieveObjectByField($className, $field, $value) {
        $result = FEntityManager::getInstance()->retriveObjOnField($className, $field, $value);
        return $result;
    }

    /**
     * delete an object by id
     */
    public static function removeObject($obj):void {
        FEntityManager::getInstance()->deleteObj($obj);
    } 



    //ACQUISTO AUTO    

    /**
     * This method retrieves all cars for sale that are available by filtering based on the provided brand, model and price.
     * all parameters are optional, if not provided, all cars will be returned.
     * It returns an array of car objects that are available for sale.
     */
    public static function searchCarsForSale($brand = null, $model = null, $offset = 0, $limit = 6) {  
        $result = FCarForSale::searchCarsForSale($brand, $model, $offset, $limit);
        return $result;
    } 


    /**
     * This method counts the total number of cars for sale that match the search criteria.
     * It returns the total count of cars that match the brand and model.
     */
    public static function countSearchedCars($brand = null, $model = null) {
        $result = FCarForSale::countSearchedCars($brand, $model);
        return $result;
    }


    /**
     * This method retrieves all distinct brands of cars for sale that are available.
     * It returns an array of unique brands.
     */
    public static function getAllBrands() {
        $result = FCarForSale::getAllBrands();
        return $result;
    }


    /**
     * This method retrieves all distinct models of cars for sale that are available for a specific brand.
     */
    public static function getAllModels($brand) {
        $result = FCarForSale::getAllModels($brand);
        return $result;
    }
    
    /**
     * It returns an array of offers that are currently available for sale to be displayed on the home page.
     */
    public static function getOffers() {
        $result = FCarForSale::getOffersSale();
        return $result;
    }

        
    public static function getNotCheckedLicense($licenseTable) {
        $result = FLicense::getNotCheckedLicense($licenseTable);
        return $result;
    }

    public static function retriveLicense($id)
    {
        $result = FLicense::getLicenseById($id);

        return $result;
    }

    public static function getAllValidUnavailabilities(int $carId) {
       $result=FUnavailability::getAllValidUnavailabilities($carId);
       return $result;
    }

    public static function getAllValidSurcharges(int $carId) {
       $result=FSurcharge::getAllValidSurcharges($carId);
       return $result;
    }
        
    public static function getSaleOrders($saleTable) {
        $result = FSale::getSaleOrders($saleTable);
        return $result;
    }

    public static function getRentOrders($rentTable) {
        $result = FRent::getRentOrders($rentTable);
        return $result;
    }

    public static function getRentsForPeriod($start, $end) {
        $result = FRent::retrieveRentsForPeriod($start, $end);
        return $result;
    }


    public static function getSalesForPeriod($start, $end) {
        $result = FSale::retrieveSalesForPeriod($start, $end);
        return $result;
    }


    public static function verifyReview($user) {
        $result = FReview::verify($user);

        return $result;
    }

    /**
     * retrieve all reviews
     */
    public static function retrieveAllReviews() {
        $result = FReview::getAllReviews();
        return $result;
    }

    /**
     * count the number of reviews
     */
    public function countReviews() {
    $result=FReview::countAllReviews();
    return $result;
    }
    public static function getBestReviews() {
        $result = FReview::retrieveBestReviews();
        return $result;
    }
}
