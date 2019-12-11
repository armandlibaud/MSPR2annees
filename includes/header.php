<?php require_once 'vendor/autoload.php'; ?>
<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

        <!DOCTYPE html>

        <html lang="fr">

        <head>

            <meta charset="UTF-8">
            <title> BeSocial </title>

            <!-- peut sortir dans google -->
            <meta name="description" content="Découvrez BeSocial, c'est génial !">
            <!--pour être responsive-->
            <meta name= "viewport" content="width=device-width, initial-scale=1">

            <!-- notre css dans un fichier à coté-->
            <link rel= "stylesheet" href="public/css/app.css">

            <link rel="icon" href="public/img/logo.png"> <!-- icone onglet -->

            <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Englebert" rel="stylesheet">

            <script src="https://www.google.com/recaptcha/api.js"></script>

        </head>
<body>
        <header>

            <div class="titre">
                <a  href="index.php"><img class="logo" src="public/img/logo.png"></a>
            </div>

            <div class="navbar col-lg-6">
                <nav>
                    <b> <a class="a" href="home.php"> Accueil | </a> </b>
                    <b> <a class="a" href="profil.php"> Mon profil | </a> </b>
                    <?php if(isAuth()): ?>
                        <b> <a class="a" href="index.php"> Déconnexion</a> </b>
                    <?php else: ?>
                         <b> <a class="a" href="index.php"> Connexion</a> </b>
                    <?php endif; ?>


                    <form class="recherche" action="recherche.php">
                        <input type="search" name="search" placeholder="Armand Libaud">
                        <button class="ok">Rechercher</button>

                    </form>

                </nav>
            </div>
        </header>
<main>







