<?php
require_once '../includes/helpers.php';

if (!isAuth()) {
    header('Location: ../');
    exit;
}

$data = [];
foreach ($_POST as $content => $value) {
    $data[$content] = $value;
};
//permet de mettre dans la BDD ce qui est tapé dans le champs pour publier
$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (content, author_id) VALUES (:content, :author_id)');
// bind associer une valeur a un paramètre
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':author_id', $_SESSION['auth_id']);
$stmt->execute();

$id = $dbh->lastInsertId();

if ($id) {
    header('Location: ../home.php');
    exit;
}




