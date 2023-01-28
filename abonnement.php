<?php require_once("includes/config.php"); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Abonnement - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>

        <main>
            <div class="abo_text"  style="text-align:center">
                <?php if($_GET["succes"] === "ok" ){ ?>
                    <p>Merci pour votre avis !</p>
                <?php } ?>

                <h2>Abonnement</h2>
                <p>Optez pour la dernière technologie de t-shirts connectés avec notre abonnement !</p>
            </div>
            <div class="abo-window">
                <div class="abo" id="abo1">
                    <div class="content_bulle">
                        <p><strong>Abonnement classique de 39,99€</span></strong></p>
                        <p>
                            Un service de prévention<br />Un lot de t-shirt connecté compris
                            dans l'abonnement<br />
                            Des spécialiste à l'écoute 7/7<br />Un suivi personnalisé<br />Un
                            bilan chaque mois
                        </p>
                        <input type="checkbox" name="extra" id="extra-checkbox">
                        <label for="extra-checkbox">
                            Option Fondateur (+ 10 €)<br>
                            <small>Accès aux pré-ventes et réductions exclusives sur de nouveaux produits</small>
                        </label>
                    </div>
                    <div class="content_button">
                        <button class="bouton-abo">S'abonner (<span class="prix-abo">39.99 €</span>)</span></button>
                    </div>
                </div>

                <div class="abo" id="abo2">
                    <div class="content_bulle">
                        <p><strong>Abonnement d'essai</strong></p>
                        <p>
                            Obtenez les mêmes avantages à prix réduit sur votre premier mois
                        </p>
                    </div>
                    <div class="content_button">
                        <button class="bouton-abo">S'abonner</button>
                    </div>
                </div>
            </div>

            <div class="formulaire_avis">
                    <form method="post" action="creation_avis.php">
                    <h3>Donnez votre avis</h3>
                        <div>
                            <label for="auteur">Pseudo</label>
                            <input type="text" name="auteur" id="auteur" required>

                            <label for="note">Note sur 5</label>
                            <input type="number" id="note" name="note" min="1" max="5" required>
                        

                            <textarea name="commentaire" cols="30" rows="10" required></textarea>
                            <button>Envoyer</button>
                        </div>

                    </form>
            </div>
        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>