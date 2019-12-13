<?php require_once 'includes/header.php';
$id = isset($_SESSION['auth_id']) ? $_SESSION['auth_id'] : null;
?>

    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img class="mt-3" src="https://placehold.it/150x150">
            <h1><?php echo getAUth()['first_name']; ?> <?php echo getAUth()['last_name']; ?></h1>
            <?php echo getAuth()['birthday']; ?>
            <p class="titleprofil">Poste</p>
            <p>etudes</p>

            <button class="text-center">Message</button>
        </div>
        <div class="col-lg-6">
            <h2 class="text-center"> Les derniers articles </h2>
            <div class="card mb-3">
                <div class="card-body">
                    <?php //foreach (getPosts() as $post) {
                          foreach (getPostsId($id) as $post) {
                        require './item-post.php';

                    }; ?>

                </div>
            </div>
        </div>
    </div>
    </div>

<?php require_once 'includes/footer.php'; ?>