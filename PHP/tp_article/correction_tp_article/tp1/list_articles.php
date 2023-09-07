<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tous les articles</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="article.php">Ajouter un article</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="list_articles.php">Tous les articles</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <table  class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom article</th>
                    <th scope="col">contenu article</th>
                </tr>
            </thead>
            <tbody>
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

                    $stt = $conn->query("SELECT * FROM article");
                    while ($article = $stt->fetch()) {
                        echo "<tr scope=\"row\"><td>".$article['id_article']."</td><td><a href=\"article.php?id_article=".$article['id_article'] . '">' . $article['nom_article']."</a></td><td>".$article['contenu_article']."</td></tr>";
                    }

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>l