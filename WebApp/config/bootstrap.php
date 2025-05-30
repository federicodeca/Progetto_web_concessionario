<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__.'/autoloader.php';



function getEntityManager(): EntityManager
{
 $entityManager=null;
    if ($entityManager === null) {
        

    $connectionParams = [
        'dbname' => DB_NAME,
        'user' => DB_USER,
        'password' => DB_PASSWORD,
        'host' => DB_HOST,
        'driver' => DB_DRIVER
    ];

    $config = ORMSetup::createAttributeMetadataConfiguration(
        paths: [__DIR__."/../Entity"],
        isDevMode: true, // Set to false in production, true=let to modifiy entity schema
    );
    $config->setAutoGenerateProxyClasses(true);

    // Create a connection with PDO MySQL
    $conn = DriverManager::getConnection($connectionParams,$config);



    // Create the EntityManager
    $entityManager =new EntityManager($conn, $config);
    }
    return $entityManager;
}

