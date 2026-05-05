<?php
// rooter, qui agis en suivant les actions de l'utilisateur
// permet de faire une vérification du bon fonctionnement de notre formulaire
// si l'utilisateur a envoyé le formulaire
if(isset($_POST['email'],$_POST['title'],$_POST['text'])){
    echo"Envoyeé ;-)";
}


// appel de la vue
include ROOT_PROJECT."/view/homapage.view.php";