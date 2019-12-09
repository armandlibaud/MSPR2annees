<?php require_once 'includes/header.php'; ?>
<?php
session_start();
//$connexion = new PDO('mysql:host=localhost;dbname=mspr','root','root');

$login_admin = "";
$login_pwd = "";


?>


<form action="" method="POST" class="container-fluid text-center mt-3">
    <p class="mt-1 mb-0">Identifiant</p>
    <input type="text" name="mail" class="form-control">
    <p class="mt-3 mb-0">Mot de passe</p>
    <input type="password" name="mdp" class="form-control">
    <input  class=" mt-3 bg-light rounded " type="submit" name="valider">
</form>


