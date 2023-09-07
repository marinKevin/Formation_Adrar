<?php
$servername = "docker-lamp-mysql";
    $username = "root";
    $password = "p@ssw0rd";
    $dbname = "articles";
    $conn = null;
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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
    <!-- <a href="article.php?id_article="
     articles.php?nom_article=Mon+bel+article&contenu_article=contenu&category=
    $_GET = [
        'nom_article' => "Mon bel article",
        'contenu_article' => "contenu",
        'category' => '',
    ]; -->
    <form method="POST" action="#">
        <p>
            <label for="nom_article">Nom de l'article :</label>
            <input type="text" name="nom_article">
            <label for="contenu_article">Contenu de votre article :</label>
            <textarea name="contenu_article" cols="30" rows="10"></textarea>
            <select name="id_category">
                <option value="">Pas de catégorie</option>
                <?php 
                $req0 = $conn->prepare('SELECT * FROM category');
                $req0->execute();
                $panier_category = $req0->fetchAll();
                foreach($panier_category as $category ){
                    echo '<option value="'.$category['id_category'].'">'.$category['name_category'].'</option>';
                }
                ?>
            </select>
            <input type="submit" value="Ajouter">
        </p>
    </form>
    <?php
    // var_export($panier_category);


    
    



    $name = null;
    $content = null;
    $id_category =null;

    if (isset($_POST['nom_article']) && isset($_POST['contenu_article']) && isset($_POST['id_category'])) { //le $POST correspond au name dans mon form
        $name = $_POST['nom_article'];
        $content = $_POST['contenu_article'];
        
        if($_POST['id_category'] !== '') {
            $id_category = (int) $_POST['id_category'];
        }

            try{
                $req = $conn->prepare('INSERT INTO article(nom_article, contenu_article,id_category)VALUES(:nom_article, :contenu_article, :id_category)');
                $req->bindParam('nom_article', $name, PDO ::PARAM_STR);
                $req->bindParam('contenu_article', $content, PDO::PARAM_STR );
                $req->bindParam('id_category', $id_category, PDO::PARAM_INT );
                $req->execute();
            }catch(PDOException $e){
                echo $e->getMessage();

            }

        

            
            
            // $req = $conn->prepare('INSERT INTO article(nom_article, contenu_article)VALUES(?,?)');
            // $req->bindParam(1, $name, PDO::PARAM_STR);
            // $req->bindParam(2, $content, PDO::PARAM_STR);

            // $rows = $conn->query('SELECT * FROM article');
            // while($donnees = $conn->fetch()){
            //     echo '<p>' . $donnee['nom_article'] . '<p>';
            // }
            
       
            

            

            echo '<p>'.$name." ".$content.'</p>';

        }
        

        
    


        // while($donnees = $reponse ->fetch()) {
        //     echo '<p>'. $donnee['nom_article']['contenue_article'].'<p>';
        // }
    ?>
</body>

</html>