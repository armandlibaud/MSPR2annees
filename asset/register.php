<?php

 /*if(true){
    header('Location: ../');
}
else{
    header('Location: /register.php');
*/


$data = $_POST;
$first_name = isset($data['fisrt_name']) ? $data['fisrt_name'] : null;
last_name = isset($data['last_name']) ? $data['last_name'] : null;
$email = isset($data['email']) ? $data['email'] : null;
$password = isset($data['password']) ? $data['password'] : null;

 $data = [];
 foreach ($_POST as $index => $value){
     $data[$index] =$value;
 };

 $dbn = connectDB();
 $stmt = $dbn->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
 $stmt->bindValue(':first_name', $data['first_name']);
 $stmt->bindValue(':last_name', $data['last_name']);
 $stmt->bindValue(':email', $data['email']);
 $stmt->bindValue(':password', $data['password']);
 $stmt->execute();

 $id = $dbn->lastInsertId();