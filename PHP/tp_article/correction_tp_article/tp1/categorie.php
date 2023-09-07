<?php
// Si l'on veut utiliser un fichier séparé pour la connection a la DB
//require('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter une categorie</title>
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
            <h1>Ajouter une categorie</h1>

            <form action="categorie.php" method="post">
                <label for="nom_categorie" class="form-label">Nom de la catégorie</label>
                <input type="text" name="nom_categorie" size="50" class="form-control" required />
                <button class="w-50 btn btn-primary btn-lg" type="submit">Ajouter</button>
            </form>

        </div>
    </div>
    <?php

    if (isset($_POST['nom_categorie'])) {
        $errors = [];
        $name = '';

        if (empty($_POST['nom_categorie'])) {
            $errors[] = 'Le nom de la catégorie ne peut être vide (info dev : contrainte SQL).';
        }
        if (empty($errors)) {
            $servername = "docker-lamp-mysql";
            $username = "root";
            $password = "p@ssw0rd";
            $dbname = 'articles';
            $conn = null;

            $name = $_POST['nom_categorie'];

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                $sth = $conn->prepare("INSERT INTO categorie (nom_categorie) VALUES (:article_cat)");
                $sth->bindParam('article_cat', $name, PDO::PARAM_STR);

                if ($sth->execute() === true) {
                    // Si on arrive ici, c'est que nous n'avons pas eu d'erreur, donc on affiche l'article ajouté.
                    $toDisplay = "<div class=\"row g-3 justify-content-center\">
                            <div class=\"col-sm-8\"><h3>Catégorie ajoutée</h3></div>
                            <div class=\"col-sm-8\"><p>$name</p></div>
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