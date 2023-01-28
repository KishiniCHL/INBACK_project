<?php

    require_once("includes/config.php");
    session_start();
    if(!isset($_SESSION['mail']) || $_SESSION['admin'] != "1"){
        header("Location: index.php");
        exit();
    }

    $requete = $database->prepare("DELETE FROM article WHERE id= :id ");

    $requete->execute([
        'id' => $_GET['id'],
    ]);
    header("Location: admin_article.php");

?>