<?php
require_once("includes/config.php");

if($_POST && isset($_POST['mail']) && isset($_POST['mdp'])) {
    $requete = $database->prepare('SELECT * FROM utilisateur WHERE mail = ?');

    $requete->execute([
        $_POST['mail']
    ]);
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur) {
        // on teste le mot de passe
        if (password_verify($_POST['mdp'], $utilisateur['mdp'])) {
            // tout bon
            session_start();
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['admin'] = $utilisateur['admin'];
            header("Location: index.php");
        } else {
            // mauvais mdp
            header("Location: connexion.php");
        }
    } else {
        // mauvais email
        header("Location: connexion.php");
    }

} else {
    header("Location: index.php");
}
?>