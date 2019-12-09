<?php require_once 'includes/header.php'; ?>
<?php
session_start();
//$connexion = new PDO('mysql:host=localhost;dbname=mspr','root','root');

$login_admin = "abcd";
$login_pwd = "abcd";


?>


    <form action="" method="POST" class="container-fluid text-center mt-3">
        <input type="text" name="mail">
        <input type="password" name="mdp">
        <input  class="container-fluid mt-3" type="submit" name="valider">
    </form>


