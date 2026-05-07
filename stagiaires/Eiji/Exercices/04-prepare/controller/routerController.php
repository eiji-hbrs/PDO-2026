<?php
// rooter, qui agis en suivant les actions de l'utilisateur

// appel de dépendances
require ROOT_PROJECT."/model/LivreModel.php";

// permet de faire une vérification du bon fonctionnement de notre formulaire
// si l'utilisateur a envoyé le formulaire
if(isset($_POST['email'],$_POST['title'],$_POST['text'])){

    // typé ses variables pour plus de sécurité
    // on reçoit -true en cas de réussite ou -false en cas d'échec
    $insert = insertLivre($db, $_POST);
}
// on prend les messages
$livre = readLivres();


// appel de la vue
include ROOT_PROJECT."/view/homepage.view.php";

// 
$db = null;