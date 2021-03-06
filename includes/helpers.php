<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mspr/env.php';
session_start();

//permet la connection a la BDD
function connectDB(){
    try {
         return new PDO("mysql:host=localhost;dbname=mspr", "root", "root", array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));

    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
}

//permet de verifier ce qui ce trouve dans la variable et arrete le script
function dd($var){
    var_dump($var);
    die();
}

//permet de recuperer l'utilisateur grace à son ID
function getUser($id){
    $dbh = connectDB();
    $stmt = $dbh ->prepare('SELECT * FROM users WHERE id = :id');
    $stmt-> bindValue(':id', $id);
    $stmt-> execute();
    return $stmt-> fetch(PDO::FETCH_ASSOC);
}

function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//permet de savoir si l'utilisateur est connécté
function isAuth()
{
    return isset($_SESSION['auth_id']);
}


function getAuth(){
    if(!isAuth()){
        return false;
    }
    return getUser($_SESSION['auth_id']);
}

function getAUthId(){
    $auth = getAuth();
    return $auth['id'];
}


//permet de recuperer tout les posts et afficher le nom de l'utilisatuer qui a écrit le commentaire
function getPosts(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT posts.*, users.first_name, users.last_name FROM posts LEFT JOIN users ON posts.author_id = users.id ORDER BY date_created DESC');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//permet de recuperer tout les posts de  l'utilisteur connécté
function getPostsId($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT posts.*, users.first_name, users.last_name FROM posts LEFT JOIN users ON posts.author_id = users.id WHERE author_id = :id ORDER BY date_created DESC');
    $stmt-> bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

