<?php require_once("includes/config.php"); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Merci - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>
        
        <main>
            <h3>Merci !</h3>
            <p> Merci de vous être inscrit à la bêta ! Voici votre code de parrainage : <?php echo $_GET["code"]; ?>. N'hésitez pas à le partager à vos amis !</p>
        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>