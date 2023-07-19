<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAnnotationMetadataConfiguration(
    paths: array(__DIR__."/entities"),
    isDevMode: true,
);
// or if you prefer annotation, YAML or XML
// $config = ORMSetup::createAnnotationMetadataConfiguration(
//    paths: array(__DIR__."/src"),
//    isDevMode: true,
// );
// $config = ORMSetup::createXMLMetadataConfiguration(
//    paths: array(__DIR__."/config/xml"),
//    isDevMode: true,
//);
// $config = ORMSetup::createYAMLMetadataConfiguration(
//    paths: array(__DIR__."/config/yaml"),
//    isDevMode: true,
// );

// configuring the database connection
$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password'=> 'root',
    'dbname' => 'daikles',
    'host'=> "localhost:3306",
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);