<?php
require_once("includes/config.php");
//on recupere les 3 derniers avis
$req = $database->prepare('SELECT * FROM avis ORDER BY date_creation DESC LIMIT 3');
$req->execute();
$liste_avis = $req-> fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Accueil - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>

        <main>
            <div class="contenu_index">
                <div class="text_index">
                    <h2>Le produit</h2>
                    <p>
                        INBACK à chercher à crée un produit centré sur le confort et la santé pour toutes personnes ayant des soucis de dos. 
                        En effet on a créé un habit fait d’un tissu élastique avec des fibres résistantes et flexibles, doté de micro-capteurs permettant capter la fréquence cardiaque, la température corporelle et de déterminer la position du dos à l’aide d’une application mobile qui traitera et enregistrera les données.
                    </p>

                    <p>
                        Ce débardeur est aussi doté d’un système de notification lorsque la position du dos n’est pas correcte. 
                        Cela peut se présenter sous forme de notification via l’application mobile ou par des vibrations à l’aide de l’habit selon les préférences du consommateur.
                    </p>

                    <p>  
                        Cet habit est un dispositif de prévention donc on aura un suivi avec les données enregistrées qui seront aussi partagés à des kinésithérapeutes de notre service qui sont à l’écoute pour toutes questions tout au long de l’abonnement pour ensuite faire un bilan sous rendez-vous à une date prédéfinie (par exemple en fin de mois).
                    </p>
                </div>

                <div class="image_index">
                    <img id="image1_index" src="/img/inbackshirt.png" alt="T-shirt INBACK"/>
                </div>
            </div>
            
            <?php //affiche la section avis si il y en a + de 0 ?>
            <?php if(count($liste_avis) > 0){ ?>
                <div class="avis">
                    <center><h3>Les derniers avis sur notre produit</h3></center>

                    <div class="list_avis">
                        <?php foreach($liste_avis as $avis): ?>
                            <div class="avis_text">
                                <p><?= $avis["auteur"] ?> (<?= $avis["note"] ?>/5)</p>
                                <p><?= $avis["commentaire"] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php } ?>

            <div class="partenaire">
                <h3 id="partenaire_title">Nos partenaires</h3>

                <div class="image_partenaire">
                    <a href="https://www.go-sport.com/"><img id="go_sport" src="img/GO_Sport_logo.png" alt="Go Sport Logo"/></a>
                    <a href="https://www.amazon.fr/"><img id="amazon" src="img/amazon.png" alt="Amazon Logo"/></a>
                    <a href="https://www.decathlon.fr/"><img id="decathlon" src="img/Decathlon-Logo.png" alt="Decathlon Logo"/></a>
                    <a href="https://www.doctissimo.fr/"><img id="doctissimo" src="img/doctissimo_logo.png" alt="Doctissimo Logo"/></a>
                </div>
            </div>


            <div class="beta_test">

                <div class="text_beta_test">
                    <h3>Aidez nous en devenant bêta-testeur</h3>
                    <p>
                       Nous cherchons des utilisateurs motivés et investis afin d'améliorer nos produits en avant-première.</p>
                       <p>Si vous vous sentez qualifié à devenir bêta-testeur, inscrivez vous ci-dessus et ayez l'opportunité de pouvoir nous suivre dans notre évolution.</p>
                        <p><a href="#" class="bouton-inscription">S'inscrire au bêta-test</a></p>
                    </p>
                </div>

                <div class="image_test_beta">
                    <img id="image_unboxing" src="img\happy_unboxing_tshirt.jpg" alt="Happy Unboxing shirt"/>
                </div>


            </div>
        </main>

        <div id="modal-inscription" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>S'inscrire au bêta-test</h2>
                <form action="beta_inscription.php" method="POST">
                    <div class="champs">
                        <div class="champ">
                            <label for="prenom">Prénom :</label>
                            <input class="input-inscription" type="text" name="prenom" required>
                        </div>
                        <div class="champ">
                            <label for="nom">Nom :</label>
                            <input class="input-inscription" type="text" name="nom" required>
                        </div>
                        <div class="champ">
                            <label for="email">Email :</label>
                            <input class="input-inscription" type="email" name="email" required>
                        </div>
                    </div>

                    <input type="submit" value="S'inscrire" id="valider_beta_test">
                </form>
            </div>
        </div>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>