<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_article.css">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "docker-lamp-mysql";
        $username = "root";
        $password = "p@ssw0rd";
        $dbname = "articles";
        $conn = null;
    
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = $conn->prepare('SELECT * FROM article');
            // $req->bindParam('nom_article', $name, PDO ::PARAM_STR);
            // $req->bindParam('contenu_article', $content, PDO::PARAM_STR );

            $req->execute();
            while($donnees = $req->fetch()){
                ?>
                <a href="articles.php?id_article=<?= $donnees["id_article"]?>"><?php echo $donnees["nom_article"] ?> </a><br>;
                <p><?  $donnees['contenu_article'] ?></p><br>;
                <p><? $donnees['id_article'] ?>  </p><br>;
                <?php
            }
            $req2 = 'CREATE TABLE categorie (
                id_category INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
                name_category VARCHAR(50))';


                
            
        


            $req->closeCursor();


            
        
    ?>
</body>
</html>