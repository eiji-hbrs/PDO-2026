<?php
// rooter, qui agis en suivant les actions de l'utilisateur

// appel de dépendances
require ROOT_PROJECT."/model/LivreModel.php";

// permet de faire une vérification du bon fonctionnement de notre formulaire
// si l'utilisateur a envoyé le formulaire
if(isset($_POST['email'],$_POST['title'],$_POST['text'])){
    echo insertLivre();
}

$livre = readLivres();


// appel de la vue
include ROOT_PROJECT."/view/homepage.view.php";

// 
$db = null;