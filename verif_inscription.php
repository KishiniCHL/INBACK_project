<?php
require_once("includes/config.php");

if($_POST && isset($_POST['mail']) && isset($_POST['mdp'])) {
    
    $data = [
        'mail' => $_POST['mail'],
        'mdp' => password_hash($_POST['mdp'], PASSWORD_BCRYPT)
    ];

    $requete = $database->prepare('INSERT INTO utilisateur (mail, mdp, admin) VALUES ( :mail, :mdp, 0)');

    $requete->execute($data);
    
    session_start();
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['admin'] = 0;

    header("Location: index.php");
} else {
    header("Location: index.php");
}
?>