<?php
// ce ficher contiendra les fonctions pour gérer la tabble livre (futur class OO)

// fonction d'insertion
// typage de -insertLivre pour plsude sécurité 
// le nom pour le PDO n'est que un alias et peux changer au besoin
// :bool => pour lui dire qu'il aura une réponse en booléenne
function insertLivre(PDO $connect, array $datas) : bool{
    // traitement des variables -$_POST en variables locales
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL); 
    //false si incorrecte, le mail en string si correct


    // on retire tous les tags 
    $title = strip_tags($_POST['title']);
    // on retire les espaces avant et arrière
    $title = trim($title);
    // on encodee les caractère dangereux en entités HTML
    $title = htmlspecialchars($title);
    // /!\ POUR LE FAIRE EN UNE SEUL LIGNE DE CODE
    // $title = htmlspecialchars(trim(strip_tags($_POST['title'])));


    $text = htmlspecialchars(trim(strip_tags($_POST['text']))); 

    // si au moins un des champs n'est pas valide
    if($email === false || empty($title) || empty($text)){
        // on arrête le script si un des champs n'est pas valide
        return false;
    }
    // on va préparer notre requête avec des marqueurs nommés(:nom)
    $sql = "INSERT INTO `livre`
            (`title`,`email`,`text`) 
            VALUES (:mail,:titre,:texte);";

    // attente des valeurs de marqueurs
    $prepare = $connect->prepare($sql);

    // on va utiliser le bindValue() par default
    // l'ordre des valaurs n'a pas d'importance
    $prepare->bindValue(":mail",$email);
    $prepare->bindValue(":titre",$title);
    $prepare->bindValue(":texte",$text);  

    // on va executer la requête
    $nbligne = $prepare->execute();
    // si on a bien insérer 1 ligne
    return $prepare->rowCount()=== 1 ? true : false;
        
}
function readLivres(){
    $sql = "SELECT * FROM `livre` ORDER BY `datetime` ASC;";
    $request = $db->query($sql);
    // on va compter le nombre de résultat
    $nbArticle = $request->count();

    // transformation du ou des résultats en tableau indexé contenant
    // des tableaux associatifs (lisible par PHP)
    $articles = $request->fetchAll(PDO::FETCH_ASSOC);

    // bonne pratique
    $request->closeCursor();
    // bonne pratique DB
    $db = null;

    
    return "Nos livres";
}