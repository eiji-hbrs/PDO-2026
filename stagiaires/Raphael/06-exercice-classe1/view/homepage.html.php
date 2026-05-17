<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <header>
    <h1>Page d'accueil</h1>
    <nav>
    <a href="./">Accueil</a>
    <a href="?page=comments">commentaires</a>
    <a href="?page=addcomments">Ajouter un commentaire</a>
    </nav>
    <main>
        <div class="container">
            <div class="card">
                <img src="img/red.png" alt="">
                <p>red</p>
            </div>
            <div class="card">
                <img src="img/green.png" alt="">
                <p>green</p>
            </div>
            <div class="card">
                <img src="img/yellow.png" alt="">
                <p>yellow</p>
            </div>
        </div>
        <p>
            Ma passion est de collectionner des mugs personnalisés avec des personnages
            de style anime. J’aime les designs colorés, les personnages originaux et
            les tasses qui ont chacune une ambiance différente.
        </p>

        <?php if ($nbCommentaires === 0): ?>

            <h2>Pas encore de commentaire</h2>

        <?php elseif ($nbCommentaires === 1): ?>

            <h2>Il y a 1 commentaire</h2>

        <?php else: ?>

            <h2>Il y a <?= $nbCommentaires ?> commentaires</h2>

        <?php endif; ?>
        <p>consultez les <a href="?page=comments">commentaires</a> </p>
        <p>Ou poster le vôtre <a href="?page=addcomments">ici</a></p>
    </main>
</header>
</body>
</html>