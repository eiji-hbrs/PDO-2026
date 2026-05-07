<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <?php if (isset($reussite)) {
        echo $reussite;
    } ?>
    <div class="container">
        <h1>📖 Livre d'or</h1>

        <!-- on a posté un message et ça a fonctionné -->
        <?php if(isset($insert) && $insert === true):
         ?>
        <button class="btn-valid">Merci pour votre commentaire</button>
        <?php
        // on a posté un message et ça n'a pas fonctionné
        elseif(isset($insert) && $insert === false):
        ?>
        <button class="btn-unvalid">Votre commentaire n'est pas valide</button>
        <?php
        endif;
        ?>
        
        <div class="form-box">
            <form method="POST" action="">

                <div class="form-group">
                    <label for="email">Votre Email :</label>
                    <input type="text" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="title">Votre title :</label>
                    <input type="text" id="title" name="title" >
                </div>

                <div class="form-group">
                    <label for="text">Votre Commentaire :</label>
                    <textarea id="text" name="text" ></textarea>
                </div>

                <button type="submit" class="btn">Laisser un Commentaire</button>


            </form>
        </div>
</body>
</html>
