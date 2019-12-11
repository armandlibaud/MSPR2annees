<?php
require_once '../includes/helpers.php';
$data = [];
foreach ($_POST as $content => $value) {
    $data[$content] = $value;
};

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (content) VALUES (:content)');
$stmt->bindValue(':content', $data['content']);

$stmt->execute();



$id = $dbh->lastInsertId();


header('Location: ../home.php');
exit;


