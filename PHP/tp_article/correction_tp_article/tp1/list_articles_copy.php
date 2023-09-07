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
    <?php include('partial_nav.php'); ?>

    <div>
        <table class="table table-striped">
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
                        echo "<tr scope=\"row\"><td>" . $article['id_article'] . "</td><td><a href=\"article.php?id_article=" . $article['id_article'] . '">' . $article['nom_article'] . "</a></td><td>" . $article['contenu_article'] . "</td></tr>";
                    }

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                ?>

            </tbody>
        </table>
        <template id="row_table_template">
            <tr scope="row">
                <td>XX_ARTICLE_ID_XX</td>
                <td><a href="article.php?id_article=XX_ARTICLE_ID_XX">XX_ARTICLE_NAME_XX</a></td>
                <td>XX_ARTICLE_CONTENT_XX</td>
            </tr>
        </template>
    </div>

    <script>



    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>