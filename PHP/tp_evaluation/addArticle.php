<?php
    $servername = "docker-lamp-mysql";
    $username = "root";
    $password = "p@ssw0rd";
    $dbname = "evaluation";
    $conn = null;
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection reussi";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "\r\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $nom = null;
    $prix = null;
    function addArticle($element1, $element2, $connexion){
        try{
            $req = $connexion->prepare('INSERT INTO article(nom_article, prix_article)VALUES(:nom_article, :prix_article)');
            $req->bindParam('nom_article', $element1, PDO ::PARAM_STR);
            $req->bindParam('prix_article', $element2, PDO::PARAM_STR );
            $req->execute();

            echo "Article Ajouté";
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    if(isset($_POST['nom_article']) && isset($_POST['prix_article'])){
        $nom = $_POST['nom_article'];
        $prix = $_POST['prix_article'];
        addArticle($nom, $prix, $conn);
        
    }
    else{
        //  index.php?nom_article.echo "remplir les deux champs  
        //  header(‘location: ./index.php’); 
    }

    
?>

</body>
</html>