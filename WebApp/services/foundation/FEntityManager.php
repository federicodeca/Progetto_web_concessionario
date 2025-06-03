<?php

require_once(__DIR__ . '/../../config/bootstrap.php');

class FEntityManager {

    private static $instance;
    private static $entityManager;


    private function __construct() {
        global $entityManager;
        self::$entityManager = $entityManager;
    }

    //singleton
    public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function getEntityManager(){
        return self::$entityManager;
    }

     /**
     * retrive one obj
     * @return obj || null
     */
    public static function retriveObj($class, $id){
        try{
            $obj = self::$entityManager->find($class, $id);
            return $obj;
        }catch(Exception $e){
            echo "ERROR: ". $e->getMessage();
            return null;
        }
    }

    /**
     * return an object finding it not on the id but on an attribute
     * findOneBy is a method of the repository, find one object by a specific field
     * $class is the full name of the entity class (ex. App\Entity\User)
     * @return object|null
     */
    public static function retriveObjOnField($class, $field, $value){
        try{
            $obj = self::$entityManager->getRepository($class)->findOneBy([$field => $value]);
            return $obj;
        }catch(Exception $e){
            echo "ERROR: ". $e->getMessage();
            return null;
        }
    }

    /**
     * $table contains the full name of the entity class (ex. App\Entity\User)
     * return a list of objects of a specific table where the field value is equal to the id
     * @return array
     */
    public static function objectList($table, $field, $id)
    {
        try{
            $dql = "SELECT e FROM " . $table . " e WHERE e." . $field . " = :creatorId";
            $query = self::$entityManager->createQuery($dql);
            $query->setParameter('creatorId', $id);
            $result = $query->getResult();
            return $result;
            }catch(Exception $e){
                echo "ERROR " . $e->getMessage();
                return [];
            }
        
    }

    /**
     * OBJECT WITH NULL FIELD
     * return all the object of a specifyc table where the field value is null
     * @return array
     */
    public static function objectListUsingNull($table, $field){
        try{
            $dql = "SELECT e FROM " . $table . " e WHERE e." .$field. " IS NULL";
            $query = self::$entityManager->createQuery($dql);
            $result = $query->getResult();
            if(count($result) > 0){
                return $result;
            }else{
                return array();
            }
        }catch(Exception $e){
                echo "ERROR " . $e->getMessage();
                return null;
        }
    }

    /**
     * FIND OBJECTS ON TWO ATTRIBUTES
     * return an object finding it not on the id but specifying 2 attributes
     */
    public static function getObjOnTwoAttributes($table, $field1, $value1, $field2, $value2)
    {
        try{
            $dql = "SELECT e FROM " . $table . " e WHERE e." . $field1 . " = :value1 AND e." . $field2 . " = :value2";
            $query = self::$entityManager->createQuery($dql);
            $query->setParameter('value1', $value1);
            $query->setParameter('value2', $value2);
            $result = $query->getOneOrNullResult();
            return $result;

        }catch(Exception $e){
            self::$entityManager->getConnection();
            echo "ERROR: " . $e->getMessage();
            return false;
        }
    }


    /**
     * return a list of all the object that have the $str in the specified attribute
    */
    public static function getSearchedItem($table, $field, $str)
    {
        try{
            $dql = "SELECT e FROM " . $table . " e WHERE e." . $field . " LIKE :searchedStr";
            $query = self::$entityManager->createQuery($dql)->setParameter('searchedStr', '%' . $str . '%');
            $result = $query->getResult();
            if(count($result) > 0)
            {
                return $result;
            }else{
                return array();
            }
        }catch(Exception $e){
            echo "ERROR " . $e->getMessage();
            return null;
        }
    }

    /**
     * FIND OBJECTS BY ATTRIBUTE
     * return the number of objects in a list finding they on a specific attribute
     */
    public static function countObjectListAttribute($table, $field, $value)
    {
        try{
            $dql = "SELECT COUNT(e) FROM " . $table . " e WHERE  e." .$field . " = :attribute";
            $query = self::$entityManager->createQuery($dql);
            $query->setParameter('attribute', $value);

            $result = $query->getSingleScalarResult();
            return $result;
        }catch(Exception $e){
            echo "ERROR " . $e->getMessage();
            return [];
        }
    }

    /**
     * CHECK IF EXISTS
     * verify if exist an object in a table with a specific attribute
     * @param string $fieldId is the id of the field to be returned, if you want to return the id of the object use 'id'
     * @return boolean|null
     */
    public static function verifyAttributes($fieldId, $table, $field, $id){
        try{
            $dql = "SELECT u.id, u." .$fieldId. " FROM " . $table . " u WHERE u." . $field . " = :attribute";
            $query = self::$entityManager->createQuery($dql);
            $query->setParameter('attribute', $id);

            $result = $query->getResult();
            if(count($result) > 0){
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
                echo "ERROR " . $e->getMessage();
                return null;
            }
    }

    /**
     * INSERT/UPDATE(transaction)
     * save one object in the db (persistance of Entity)
     * This method uses a transaction to ensure that the object is saved correctly.
     * If an error occurs, the transaction is rolled back and an error message is displayed.
     * @return boolean
     */
    public static function saveObject($obj)
    {
        try{
            self::$entityManager->getConnection()->beginTransaction();  // begin transaction
            self::$entityManager->persist($obj);
            self::$entityManager->flush();
            self::$entityManager->getConnection()->commit();     // commit transaction, object is saved correctly
            return true;
        }catch(Exception $e){
            self::$entityManager->getConnection();
            echo "ERROR: " . $e->getMessage();
            return false;
        }
    }

    /**
     * DELETE(transaction)
     * delete an object from the db 
     * This method uses a transaction to ensure that the object is deleted correctly.
     * @return boolean
     */
    public static function deleteObj($obj){
        try{
            self::$entityManager->getConnection()->beginTransaction();
            self::$entityManager->remove($obj);
            self::$entityManager->flush();
            self::$entityManager->getConnection()->commit();
            return true;
        }catch(Exception $e){
            self::$entityManager->getConnection();
            echo "ERROR: " . $e->getMessage();
            return false;
        }
    }

    /**
     * return an array of all elements of a table
     * @return array
     */
    public static function selectAll($table){
        try{
            $dql = "SELECT e FROM " . $table . " e";
            $query = self::$entityManager->createQuery($dql);
            $result = $query->getResult();
            return $result;
        }catch(Exception $e){
            echo "ERROR " . $e->getMessage();
            return [];
        }
    }


    /**
     * lock a table 
     * @param string $tableName
     * @return void
     */
    public static function lockTable(string $tableName): void {
        try {
            $conn = self::$entityManager->getConnection();
            $conn->executeQuery("LOCK TABLES $tableName WRITE");
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    /**
     * unlock a table
     * @param string $tableName
     * @return void
     */
    public static function unlockTable(string $tableName): void {
        try {
            $conn = self::$entityManager->getConnection();
            $conn->executeQuery("UNLOCK TABLES $tableName WRITE");
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
    

}