<?php require_once("includes/config.php"); 
session_start();
if(!isset($_SESSION['mail']) || $_SESSION['admin'] != "1"){
    header("Location: index.php");
    exit();
}

$req = $database->prepare('SELECT * FROM avis ORDER BY date_creation ASC');
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
        <title>Admin - INBACK</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once("includes/header.php"); ?>
        
        <main>
            <div class="admin_liste_avis">
                <?php foreach($liste_avis as $avis): ?>
                    <div class="admin_avis">
                        <p> Avis : <?= $avis["auteur"] ?> (<?= $avis["note"] ?>/5)</p>
                        <p><?= $avis["commentaire"] ?></p>
                        <a href="supp_avis.php?id=<?= $avis['id'];?>" class="admin_delete">Supprimer l'avis</a>
                    </div>
                <?php endforeach; ?>
            </div>
                
        </main>

        <?php require_once("includes/footer.php"); ?>

        <script src="/js/script.js"></script>
    </body>
</html>