<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="#">
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

    if (isset($_POST['nom_article']) && isset($_POST['contenu_article'])) {
        $name = $_POST['nom_article'];
        $content = $_POST['contenu_article'];

        $servername = "docker-lamp-mysql";
        $username = "root";
        $password = "p@ssw0rd";
        $dbname = "articles";
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = $conn->prepare('INSERT INTO article(nom_article, contenu_article)VALUES(:nom_article, :contenu_article)');
            $req->bindParam('nom_article', $name, PDO ::PARAM_STR);
            $req->bindParam('contenu_article', $content, PDO::PARAM_STR );
            
            // $req = $conn->prepare('INSERT INTO article(nom_article, contenu_article)VALUES(?,?)');
            // $req->bindParam(1, $name, PDO::PARAM_STR);
            // $req->bindParam(2, $content, PDO::PARAM_STR);

            // $rows = $conn->query('SELECT * FROM article');
            // while($donnees = $conn->fetch()){
            //     echo '<p>' . $donnee['nom_article'] . '<p>';
            // }
            
       
            

            $req->execute();

            echo '<p>'.$name." ".$content.'</p>';

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "\r\n";
        }
        
    


        // while($donnees = $reponse ->fetch()) {
        //     echo '<p>'. $donnee['nom_article']['contenue_article'].'<p>';
        // }
    }
    ?>
</body>

</html>