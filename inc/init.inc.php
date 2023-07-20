<?php 

// Ici on mettrait tous les éléments php nécessaire à la bonne initialisation de notre site web

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Par exemple : 

    // Connexion à la BDD
function get_connection() {
    $pdo = new PDO("mysql:host=localhost;dbname=daikles", 'root', 'root');
    $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    return $pdo;
}
    // Lancement de session utilisateur
session_start();
    // Initialisation de constantes 

    // Déclarations de certaines variables

global $_ENV;
$_ENV = "DEV";