<?php
    /*-----------------------------------------------------
                    Test (import du fichier) :
    -----------------------------------------------------*/
    //test si le fichier importé existe
    if(isset($_FILES['file'])){
        //stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
        $tmpName = $_FILES['file']['tmp_name'];
        //stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
        $name = $_FILES['file']['name'];
        //stocke la taille du fichier en octets
        $size = $_FILES['file']['size'];
        //stocke les erreurs (pb d'import, pb de droits etc...)
        $error = $_FILES['file']['error'];
        //déplacer le fichier importé dans le dossier image à la racine du projet
        $fichier = move_uploaded_file($tmpName, "imports/$name");
    }
     

/*-----------------------------------------------------
                    Formulaire HTML :
    -----------------------------------------------------*/
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h2>importer une image</h2>
        <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="file">
        <p><button type="submit">importer</button></p>
    </form>
</html>
