<?php

require_once(__DIR__ . '/../config/config.php');
use Doctrine\ORM\Tools\SchemaTool;
require_once(__DIR__ . '/../config/bootstrap.php');
/**
 * calass for checking if the db exist and if not create it
 */
class Installation{

    public static function install(){
    try{
        $db = new PDO("mysql:host=". DB_HOST, DB_USER, DB_PASSWORD);

        $stmt = $db->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '" . DB_NAME ."'");
        $existingDatabase = $stmt->fetchColumn();

        if(!$existingDatabase){
            $queryCreateDB = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
            $db->exec($queryCreateDB);
            
        } else {
            
        }

       
        $entityManager = getEntityManager();
        if (!$entityManager) {
            throw new Exception("EntityManager non inizializzato.");
        }

        $schemaTool = new SchemaTool($entityManager);
        $metadata = $entityManager->getMetadataFactory()->getAllMetadata();

        if (empty($metadata)) {
          
            return;
        }

        
        $schemaTool->updateSchema($metadata);
        

    }catch(PDOException $e){
        echo "ERROR: ". $e->getMessage();
    }catch(Exception $e){
        echo "ERROR: ". $e->getMessage();
    }
}
}
