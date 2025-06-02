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
            echo "Database creato.<br>";
        } else {
            echo "Database già esistente.<br>";
        }

        // Ora creiamo lo schema sempre
        $entityManager = getEntityManager();
        if (!$entityManager) {
            throw new Exception("EntityManager non inizializzato.");
        }

        $schemaTool = new SchemaTool($entityManager);
        $metadata = $entityManager->getMetadataFactory()->getAllMetadata();

        if (empty($metadata)) {
            echo "Nessuna entità trovata.<br>";
            return;
        }

        $schemaTool->createSchema($metadata);
        echo "Tabelle create con successo.<br>";

    }catch(PDOException $e){
        echo "ERROR: ". $e->getMessage();
    }catch(Exception $e){
        echo "ERROR: ". $e->getMessage();
    }
}
}
