<?php require_once 'includes/header.php';
$id = isset($_SESSION['auth_id']) ? $_SESSION['auth_id'] : null;
?>

    <div class="container">
    <div class="row">
        <div class="col-lg-4">

            <img class="mt-3 img-thumbnail" src="https://www.gravatar.com/avatar/<?php echo md5(getAuth()['email']); ?>?s=600">
            <!-- affiche le nom et le prénom de la personne connécté -->
            <h1 class="h1 text-center"><?php echo getAUth()['first_name']; ?> <?php echo getAUth()['last_name']; ?></h1>

            <p class="titleprofil text-center">Poste</p>
            <p class="text-center">etudes</p>

            <button class="text-center">Message</button>
        </div>
        <div class="col-lg-8">
            <h2 class="text-center"> Mes publications </h2>
            <div class="card mb-3">
                <div class="card-body">
                    <?php
                            // Permet d'afficher les publications de l'utilisateur connecté 
                          foreach (getPostsId($id) as $post) {
                        require './item-post.php';

                    }; ?>

                </div>
            </div>
        </div>
    </div>
    </div>

<?php require_once 'includes/footer.php'; ?>