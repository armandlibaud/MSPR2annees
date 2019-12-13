<?php
require_once '../includes/helpers.php';

$data = [];
foreach ($_POST as $index => $value) {
    $data[$index] = $value;
};

$dbh = connectDB();
//on insere dans la BDD les champs requis pour la création d'un profil
$stmt = $dbh->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
$stmt->bindValue(':first_name', $data['first_name']);
$stmt->bindValue(':last_name', $data['last_name']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', sha1($data['password']));
$stmt->execute();

//o, verifie si l'email est deja dnas la BDD si oui on ne rentre pas l'utilisateur dans la BDD
$id = $dbh->lastInsertId();
$sql = "SELECT * 
FROM users 
WHERE email = :email limit 1";


header('Location: ../register-end.php');

