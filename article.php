<?php
    require_once("includes/config.php");

    $selec_article = $_GET['id'];
    
    $req = $database->prepare("SELECT * FROM article WHERE id= :idArticle");
    $req->execute(array('idArticle'=>$selec_article));
    $article = $req-> fetch(PDO::FETCH_ASSOC);
    

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Article - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>

        <main>
            <h3><?= $article["titre"] ?></h3>
            <?php if($article['image'] != "" ){ ?>
                <img src="<?= $article['image'] ?>" class="article_image">
            <?php } ?>
            <div class="contenu_article">
                <p><?= $article["contenu"] ?></p>
                <p><?= $article["date_article"] ?></p>
            </div>
        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>