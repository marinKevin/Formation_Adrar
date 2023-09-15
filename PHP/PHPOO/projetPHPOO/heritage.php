<?php
    require './vendor/autoload.php';
    include './Utilisateur.php';
    include './Admin.php';

    // dd($user1, $admin);

    $user1 = new Utilisateur('Paul', 'jean');
    $user2 = new Utilisateur('Marc', 'jean');
    $user3 = new Utilisateur('Baptiste', 'jean');
    $user4 = new Utilisateur('Claude', 'jean');

    $admin = new Admin('Big', 'Brother');
    
    $admin->banUser($user1);
    $admin->banUser($user2);
    $admin->banUser($user3);
    $admin->banUser($user4);

    $admin->getbans();




?>