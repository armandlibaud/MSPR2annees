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

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (content, author_id) VALUES (:content, :author_id)');
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':author_id', $_SESSION['auth_id']);
$stmt->execute();

$id = $dbh->lastInsertId();

if ($id) {
    header('Location: ../home.php?success');
    exit;
}




