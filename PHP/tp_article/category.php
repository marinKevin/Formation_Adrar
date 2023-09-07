<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <p>
            <label for="name_category">Nom de la category</label>
            <input type="text" name="name_category">
            <input type="submit" value="Ajouter">
        </p>

    </form>

<?php
    $name_category = null;

    if (isset($_POST['name_category'])) {
        $name_category = $_POST['name_category'];

        $servername = "docker-lamp-mysql";
        $username = "root";
        $password = "p@ssw0rd";
        $dbname = "articles";
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = $conn->prepare('INSERT INTO category(name_category)VALUES(:name_category)');
            $req->bindParam('name_category', $name_category, PDO ::PARAM_STR);

            $req->execute();
            echo '<p>'.$name_category.'<p>';

        }catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "\r\n";
    }
    }
    
    
?>

</body>
</html>