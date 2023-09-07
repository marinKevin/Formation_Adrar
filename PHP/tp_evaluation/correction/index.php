<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation</title>
</head>

<body>
    <div>
        <?php
        if (isset($_GET['add'])) {
            echo $_GET['add'];
        }

        if (isset($_GET['errors'])) {
            echo $_GET['errors'];
        }
        ?>
    </div>


    <form action="addArticle.php" method="post">
        <div>
            <label for="nom_article">Nom de l'article :</label>
            <input type="text" name="nom_article" id="nom_article" />
        </div>
        <div>
            <label for="prix_article">Prix :</label>
            <input type="number" name="prix_article" id="prix_article" step="0.01" />
        </div>

        <div>
            <input type="submit" name="submit" value="Ajouter" />
        </div>
    </form>
</body>

</html>