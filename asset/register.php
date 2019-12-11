<?php
require_once '../includes/helpers.php';

$data = [];
foreach ($_POST as $index => $value) {
    $data[$index] = $value;
};

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', sha1($data['password']));
$stmt->execute();

$id = $dbh->lastInsertId();
$sql = "SELECT * 
FROM users 
WHERE email = :email limit 1";



header('Location: ../home.php');

