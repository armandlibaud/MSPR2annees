<?php
require_once '../includes/helpers.php';

$data = [];
foreach ($_POST as $index => $value) {
    $data[$index] = $value;
};

$dbn = connectDB();
$stmt = $dbn->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', sha1($data['password'])); // il faut compare rles deux cryptage lors de la connexion
$stmt->execute();

$id = $dbn->lastInsertId();
$sql = "SELECT * 
FROM users 
WHERE email = :email";



header('Location: ../home.php');

