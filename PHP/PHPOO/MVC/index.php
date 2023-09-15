<?php
//Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/PHPOO/MVC/':
            include './home.php';
            break;
        case '/PHPOO/MVC/test':
            include './test.php';
            break;
        default:
            include './error.php';
            break;
    }
?>