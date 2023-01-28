<?php require_once("includes/config.php"); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Connexion - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>

        <main>
            <div class="contenu_connexion">
                <form action="verif_connexion.php" method="POST">
                    <h3>Connexion</h3>

                        <label for="mail">Mail</label>
                        <input type="text" placeholder="Email" name="mail" id="mail" required>
                        <label for="mdp">Mot de passe</label>
                        <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required>

                        <input type="submit" id='submit' value ="Me connecter">

                </form>
            </div>
        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>