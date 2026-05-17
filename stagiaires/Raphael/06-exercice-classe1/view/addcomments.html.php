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
    </header>
    <main>
        <form method="POST" action="">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="full_name">Nom complet</label>
        <input type="text" name="full_name" id="full_name" required>
    </div>

    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div>
        <label for="text_comment">Commentaire</label>
        <textarea name="text_comment" id="text_comment" required></textarea>
    </div>

    <button type="submit">Envoyer</button>
</form>
    </main>
</body>
</html>