<?php

require_once("includes/config.php");
session_start();

if(!isset($_SESSION['mail']) || $_SESSION['admin'] != "1"){
    header("Location: index.php");
    exit();
}

if($_POST && isset($_POST['titre']) && isset($_POST['contenu']) && isset($_POST['tag']))
    {
        $fichier = $_FILES['image'];
        $image = "";
        $fichierok = false;

        if ($fichier && $fichier['tmp_name'] != "") {
            $image = "fichiers/" . basename($fichier['name']);

            if (getimagesize($fichier['tmp_name']) !== false) {
                // fichier est une image
                if (!file_exists($image)) {
                    // on stocke le fichier
                    if(move_uploaded_file($fichier['tmp_name'], $image)){
                        $fichierok = true;
                    }
                }
            }
        }

    $data = [
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'tag' => $_POST['tag']
    ];

    if($fichierok){
        $data['image'] = $image;
    } else {
        $data['image'] = '';
    }

    $requete = $database->prepare('INSERT INTO article (titre, contenu, image, tag, date_article)
    VALUES ( :titre, :contenu, :image, :tag, CURDATE())');

    $requete->execute($data);

    header("Location: admin_article.php");

    }
    else{
        header("creation_article.php");
    }
?>