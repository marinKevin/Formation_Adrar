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

    $searchValue = !empty($_GET['search']) ? '%'.$_GET['search'].'%' : '%%';

    // $articles = $conn->query("SELECT * FROM article")->fetchAll();

    $stt = $conn->prepare("SELECT * FROM article WHERE nom_article LIKE :searchvalue OR contenu_article LIKE :searchvalue2");
    $stt->bindValue('searchvalue', $searchValue);
    $stt->bindValue('searchvalue2', $searchValue);
    $stt->execute();
    $articles = $stt->fetchAll();

    $response = json_encode($articles);

    echo $response;


} catch (PDOException $e) {
    echo $e->getMessage();
}
?>