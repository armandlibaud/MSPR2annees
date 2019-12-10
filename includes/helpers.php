<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mspr/env.php';

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

function dd($var){
    var_dump($var);
    die();
}