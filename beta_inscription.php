<?php

require_once("includes/config.php"); 

if($_POST && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']))
    {
    //requete post du formulaire : on insere un nom
    
    //genere un code aléatoire de 8 caracteres
    //4 octets -> 8 caracteres
    $code = bin2hex(random_bytes(4));

    $data = [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'code' => $code
    ];

    $requete = $database->prepare('INSERT INTO beta_inscriptions (nom, prenom, email,code)
    VALUES ( :nom, :prenom, :email, :code)');

    $requete->execute($data);

    header("Location: remerciements.php?code=$code");

    }
    else{
        header("Location: index.php");
    }