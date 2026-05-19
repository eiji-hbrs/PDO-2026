<?php
// 05-exercice/controller/routerController.php

# Importer le fichier model qui contient nos fonctions de la table commentaire
require ROOT_PROJECT."/model/CommentaireModel.php";

# Création de notre connexion PDO (avec try catch)
if(isset($_POST['email'],$_POST['title'],$_POST['text_comment'])){

    // typé ses variables pour plus de sécurité
    // on reçoit -true en cas de réussite ou -false en cas d'échec
    $insert = addCommentaire($db, $_POST);
}

# suivant les actions utilisateur, appelez les vues.

$commentaires = readCommentaires();

include ROOT_PROJECT."/view/homepage.html.php";

$db = null;
