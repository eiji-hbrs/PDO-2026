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
        <?php if (isset($_GET['merci'])): ?>
            <p class="success-message">
                Merci, votre commentaire a bien été ajouté.
             </p>
        <?php endif; ?>
        <?php if ($nbCommentaires === 0): ?>

            <h2>Pas encore de commentaire</h2>

        <?php elseif ($nbCommentaires === 1): ?>

            <h2>Il y a 1 commentaire</h2>

        <?php else: ?>

            <h2>Il y a <?= $nbCommentaires ?> commentaires</h2>

        <?php endif; ?>

        <?php if (!empty($commentaires)): ?>

        <?php foreach ($commentaires as $commentaire): ?>
            <div class="commentaire-card">
                <h3><?= htmlspecialchars($commentaire['title']) ?></h3>

                <p>
                Écrit par <?= htmlspecialchars($commentaire['full_name']) ?>
                le <?= htmlspecialchars($commentaire['post_date']) ?>
                </p>

                <p><?= htmlspecialchars($commentaire['text_comment']) ?></p>
        </div>
        <?php endforeach; ?>

        <?php endif; ?>
    </main>
</header>
</body>
</html>