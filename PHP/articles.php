<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="POST" action="#">
        <p>
            <label for="nom_article">Nom de l'article :</label>
            <input type="text" name="nom_article">
            <label for="contenu_article">Contenu de votre article :</label>
            <textarea name="contenu_article" cols="30" rows="10"></textarea>
            <input type="submit" value="Ajouter">
        </p>
    </form>
    <?php
    $name = null;
    $content = null;

    if(isset($_POST['nom_article']) && isset($_POST['contenu_article'])){
        $name = $_POST['nom_article'];
        $content = $_POST['contenu_article'];
    }

    $servername = "127.0.0.1";
        $servername = "docker-lamp-mysql";
        $username = "root";
        $password = "p@ssw0rd";
        $dbname = "articles";
        $conn = null;
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<p>Connected successfully</p>";
        }   catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage() . "\r\n";
        }
    
    $req = $bdd->prepare('INSERT iNTO article(nom_aticle, contenu_article)VALUES(:Premier article, tralalalallalalallalala)');
    $req->execute('nom_article' => $name, )
    ?>
</body>
</html>