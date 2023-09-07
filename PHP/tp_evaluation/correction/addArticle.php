<?php

$errors = [];
$nomArticle = null;
$prixArticle = null;

$conn = null;
$servername = "docker-lamp-mysql";
$username = "root";
$password = "p@ssw0rd";
$dbname = 'evaluation';

try {
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    // ]);

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (isset($_POST['nom_article']) && isset($_POST['prix_article'])) {
    if (empty($_POST['nom_article'])) {
        $errors[] = 'Le nom de l\'article ne peut pas être null';
    }
    if (!is_numeric($_POST['prix_article'])) {
        $errors[] = 'Le prix de l\'article doit être de type numérique';
    }

    if (empty($errors)) {
        $nomArticle = $_POST['nom_article'];
        $prixArticle = (float) $_POST['prix_article'];

        addArticle($nomArticle, $prixArticle, $conn, $errors);
    }
 
} else {
    $errors[] = 'Les champs doivent être remplis';
}

// Redirection => index.php?ok=Article+bien+ajouté
if (empty($errors)) {
    $param = 'add='. $nomArticle . " a bien été ajouté en BDD";
} else {
    $param = "errors=Des erreurs sont survenues : " . implode("<br/>", $errors);
}

header('location: ./index.php?'. $param);

function addArticle(string $nomArticle, float $prixArticle, PDO $conn, array &$errors)  
{
    // $sql = "INSERT INTO article(nom_article,prix_article) VALUES (:nom_article, :prix_article)";

    try {
        $stt = $conn->prepare($sql);
        $stt->bindParam('nom_article', $nomArticle);
        $stt->bindParam('prix_article', $prixArticle, PDO::PARAM_STR);
        $stt->execute();
    } catch(PDOException $e) {
        echo $e->getMessage();
        $errors[] = $e->getMessage();
    }

}