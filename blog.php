<?php
require_once("includes/config.php");

$req = $database->prepare('SELECT * FROM article ORDER BY id ASC');
$req->execute();
$liste_article = $req-> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Blog - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>

        <main>
            <center><h3>Nos articles</h3></center>

            <div class="bouton_trier">
                <button type="button" class="bouton-tag" data-tag="">Tout</button>
                <button type="button" class="bouton-tag" data-tag="sante">Santé</button>
                <button type="button" class="bouton-tag" data-tag="loisir">Loisir</button>
                <button type="button" class="bouton-tag" data-tag="technologie">Technologie</button>
            </div>
            <div class="article">
                <?php foreach($liste_article as $article): ?>
                        <div class="article_text" data-tag="<?= $article["tag"] ?>">
                        <p><?= $article["titre"] ?></p>
                            <a href="article.php?id=<?= $article['id']; ?>">Lire cet article</a>
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>