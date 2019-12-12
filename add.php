<?php
require_once './includes/helpers.php';
$data = [];
foreach ($_POST as $index => $value) {
    $data[$index] = $value;
};

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (content) VALUES (:content)');
$stmt->bindValue(':content', $data['content']);

$stmt->execute();





header("Location: home.php");

?>