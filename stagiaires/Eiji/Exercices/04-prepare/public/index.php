<?php
// chargement de la configuration
// de la DB 
require_once 'config-dev.php';

// tentative de connexion
try{

    $db = new PDO(
        dsn: MARIA_DSN,
        username: DB_CONNECT_USER, 
        password: DB_CONNECT_PWD,
    );

// bonne pratique, utilisons Exception plutôt
// que PDOException (= 1 gestionnaire d'erreurs)
}catch(Exception $e){
    // pour concaténer de l'orienté objet, les {} sont fréquentes
    // die est comme exit, il permet d'arrêter le site en cas d'erreur
    die("Numéro d'erreur {$e->getCode()} <br> Message d'erreur {$e->getMessage()} ");
}

// appel de votre router
require_once ROOT_PROJECT."../controller/routerController.php";

// fermeture de connexion
$db = null;