<?php

require_once("includes/config.php"); 

if($_POST && isset($_POST['auteur']) && isset($_POST['note']) && isset($_POST['commentaire']))
    {
    //requete post du formulaire : on insere un nom
    

    $data = [
        'auteur' => $_POST['auteur'],
        'note' => $_POST['note'],
        'commentaire' => $_POST['commentaire'],
    ];

    $requete = $database->prepare('INSERT INTO avis (auteur, note, commentaire)
    VALUES ( :auteur, :note, :commentaire)');

    $requete->execute($data);

    header("Location: abonnement.php?succes=ok");

    }
    else{
        header("Location: index.php");
    }