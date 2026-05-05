<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php if (isset($reussite)) {
        echo $reussite;
    } ?>
    <div class="container">
        <h1>📖 Livre d'or</h1>
        <?php if (isset($erreur)) {
            echo ($erreur);
        }; ?>
        <div class="form-box">
            <form method="POST" action="">

                <div class="form-group">
                    <label for="email">Votre Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="title">Votre title :</label>
                    <input type="text" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="text">Votre Commentaire :</label>
                    <textarea id="text" name="text" required></textarea>
                </div>

                <button type="submit" class="btn">Laisser un Commentaire</button>
            </form>
        </div>
</body>
</html>
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