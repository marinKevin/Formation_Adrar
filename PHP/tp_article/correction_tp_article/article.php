<?php
// Si l'on veut utiliser un fichier séparé pour la connection a la DB
// require('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter un article</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="row g-3 justify-content-center">
        <div class="col-sm-8">
            <h1>Ajouter un article</h1>

            <form action="article.php" method="post">
                <label for="nom_article" class="form-label">Nom de l'article</label>
                <input type="text" name="nom_article" size="50" class="form-control" required />
                <label for="contenu_article" class="form-label">Contenu</label>
                <input type="text" name="contenu_article" size="255" class="form-control" />
                <button class="w-50 btn btn-primary btn-lg" type="submit">Ajouter</button>
            </form>
			
        </div>
    </div>
    <?php

    if (isset($_POST['nom_article']) && isset($_POST['contenu_article'])) {
        $errors = [];
        $name = '';
        $content = '';

        if (empty($_POST['nom_article'])) {
            $errors[] = 'Le nom de l\'article ne peut être vide (info dev : contrainte SQL).';
        }
        if (empty($errors)) {
            $servername = "docker-lamp-mysql";
            $username = "root";
            $password = "p@ssw0rd";
            $dbname = 'articles';
            $conn = null;

            $name = $_POST['nom_article'];
            $content = $_POST['contenu_article'];

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                // methode simple (a ne pas utiliser dans ce cas car on ajoute directement des données utilisateur non sanitisées)
                // $sth = $conn->query("INSERT INTO article (nom_article,contenu_article) VALUES ('$name','$content')");
    
                // méthode conseillée : requêtes préparées
                $sth = $conn->prepare("INSERT INTO article (nom_article,contenu_article) VALUES (:article_name,:article_content)");
                $sth->bindParam('article_name', $name, PDO::PARAM_STR);
                $sth->bindParam('article_content', $content, PDO::PARAM_STR);

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