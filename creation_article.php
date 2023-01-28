<?php require_once("includes/config.php");
    session_start();
    if(!isset($_SESSION['mail']) || $_SESSION['admin'] != "1"){
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Admin - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>

        <main>

            <div class="formulaire_article_creation">
                <form method="post" action="traitement_article.php" enctype="multipart/form-data">
                <h3>Créer un article</h3>
                    <div>
                        <label for="titre">Titre</label>
                        <input type="text" name="titre" id="titre" required><br><br>
                        <label for="image">Image :</label>
                        <input type="file" name="image" id="image"><br><br>
                        <label for="image">Tag :</label>
                        <select name="tag" id="tag">
                            <option value="sante">Santé</option>
                            <option value="loisir">Loisir</option>
                            <option value="technologie">Technologie</option>
                        </select><br><br>
                        <textarea name="contenu" cols="30" rows="10" id="formulaire_contenu"></textarea><br>
                        <input type="submit" value="envoyer">
                    </div>

                </form>
            </div>

        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>