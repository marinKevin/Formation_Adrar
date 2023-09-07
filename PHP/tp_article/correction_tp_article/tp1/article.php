<?php
$servername = "docker-lamp-mysql";
$username = "root";
$password = "p@ssw0rd";
$dbname = 'articles';
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $isModification = isset($_GET['id_article']);
    $article = null;

    if ($isModification) {
        $idArticle = (int)$_GET['id_article'];
        $sql = "SELECT * from article WHERE id_article = :id_article";
        $stt = $conn->prepare($sql);
        $stt->bindParam('id_article', $idArticle, PDO::PARAM_INT);
        $stt->execute();
        if($stt->rowCount() === 1) {
            $article = $stt->fetch();
        }
    }

    } catch (PDOException $e) { 
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if ($isModification) {echo "Modifier";}else{echo "Ajouter";}?> un article</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1>My Blog</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="accueil.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="article.php">Ajouter un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list_articles.php">Tous les articles</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row g-3 justify-content-center">
        <div class="col-sm-8">
            <h1><?php if ($isModification) {echo "Modifier";}else{echo "Ajouter";}?> un article</h1>

            <form action="article.php" method="post">
                <label for="nom_article" class="form-label">Nom de l'article</label>
                <input type="text" name="nom_article" size="50" class="form-control" <?php if (!empty($article)) { ?> value="<?=$article['nom_article'] ?>" <?php }?>required />
                <label for="contenu_article" class="form-label">Contenu</label>
                <input type="text" name="contenu_article" size="255" class="form-control" <?php if (!empty($article)) { ?> value="<?=$article['contenu_article'] ?>" <?php }?> />
                <?php 
                    if (!empty($article)) { ?>
                <input type="hidden" name="id_article" value="<?= $article['id_article']?>" />   
                <?php    }
                ?>
                <select name="categorie">
                
                    <option value=""></option>
                    <?php
                        // récupération des categories
                        $articleCategoryId = !empty($article) ? $article['id_categorie'] : null;
                        $categories = $conn->query("SELECT * FROM categorie")->fetchAll();
                        
                        foreach($categories as  $category) {
                            $categoryId = $category['id_categorie'];
                            $categoryName  = $category['nom_categorie'];
                            $selected = (int)$articleCategoryId === (int)$categoryId ? 'selected' : '';
                            echo "<option value=\"$categoryId\" $selected>$categoryName</option>";
                        }
                    ?>
                </select>
                <button class="w-50 btn btn-primary btn-lg" type="submit"><?php if ($isModification) {echo "Modifier";}else{echo "Ajouter";}?></button>
            </form>

        </div>
    </div>
    <?php

    if (isset($_POST['nom_article']) && isset($_POST['contenu_article']) && isset($_POST['categorie'])) {
        $errors = [];
        $name = '';
        $content = '';

        if (empty($_POST['nom_article'])) {
            $errors[] = 'Le nom de l\'article ne peut être vide (info dev : contrainte SQL).';
        }
        if (empty($errors)) {
            $name = $_POST['nom_article'];
            $content = $_POST['contenu_article'];

            /* 
            // Condition identique à la condition ternaire ci-dessous
            if ($_POST['categorie'] !== '') {
                $categoryId = $_POST['categorie'];
            } else {
                $categoryId = null;
            }
            */

            $categoryId = $_POST['categorie'] !== '' ? $_POST['categorie'] : null;

            try {
                // methode simple (a ne pas utiliser dans ce cas car on ajoute directement des données utilisateur non sanitisées)
                // $sth = $conn->query("INSERT INTO article (nom_article,contenu_article) VALUES ('$name','$content')");
    
                // méthode conseillée : requêtes préparées
                $sql = null;
                if(isset($_POST['id_article'])) {
                    $sql = "UPDATE article SET nom_article = :article_name, contenu_article = :article_content, id_categorie = :categorie
                     WHERE id_article = :id_article";
                     $sth = $conn->prepare($sql);
                     $sth->bindParam('article_name', $name, PDO::PARAM_STR);
                     $sth->bindParam('article_content', $content, PDO::PARAM_STR);
                     $sth->bindParam('categorie', $categoryId, PDO::PARAM_INT);
                     $sth->bindParam('id_article', $_POST['id_article'], PDO::PARAM_INT);

                } else {
                    $sql = "INSERT INTO article (nom_article,contenu_article,id_categorie) VALUES (:article_name,:article_content, :categorie)";
                    $sth = $conn->prepare($sql);
                    $sth->bindParam('article_name', $name, PDO::PARAM_STR);
                    $sth->bindParam('article_content', $content, PDO::PARAM_STR);
                    $sth->bindParam('categorie', $categoryId, PDO::PARAM_INT);
                }

                if ($sth->execute() === true) {
                    // Si on arrive ici, c'est que nous n'avons pas eu d'erreur, donc on affiche l'article ajouté.
                    $toDisplay = "<div class=\"row g-3 justify-content-center\">
                            <div class=\"col-sm-8\"><h3>Article ajouté</h3></div>
                            <div class=\"col-sm-8\"><p>$name</p></div>
                            <div class=\"col-sm-8\"><p>$content</p></div>
                            </div>";
                    echo $toDisplay;
                }

            } catch (PDOException $e) {
                $errors[] = $e->getMessage();
            } finally {
                // Close connection
                $sth = null;
                $conn = null;

                if (!empty($errors)) {
                    echo "<div class=\"row g-3 justify-content-center\"><div class=\"col-sm-8\">";
                    echo count($errors) . ' erreurs sont survenues';
                    echo '<ul>';
                    foreach ($errors as $error) {
                        echo "<li>$error</li>";
                    }
                    echo '</ul></div></div>';
                }
            }
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>