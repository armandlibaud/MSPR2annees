<?php
require_once '../includes/helpers.php';

if (!empty($_POST)) {

    $dbn = connectDB();
    $query = $dbn ->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $query->execute([
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ]);





    header('Location: ../home.php');
    exit;
};

