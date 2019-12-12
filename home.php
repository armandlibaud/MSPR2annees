<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="card text-center">
                <div class="card-header">
                    <p>Mon profil </p>
                </div>
                <div class="card-body">
                    <h5 class="mb-4">
                        <?php

                        echo getAUth()['first_name']; ?> <?php echo getAUth()['last_name']; ?>
                    </h5>

                    <p class="text-left">Fil d'actualité</p>
                    <p class="text-left">Messages</p>
                    <p class="text-left">Lorem ipsum </p>
                    <p class="text-left mb-4"> Lorem ipsum</p>
                    <p class="text-left font-weight-bold"> Raccourci </p>
                    <p class="text-left">Lorem ipsum</p>
                    <p class="text-left">Lorem ipsum</p>
                    <p class="text-left">Lorem ipsum</p>
                    <p class="text-left">⇣ Voir plus...</p>
                    <p class="text-left font-weight-bold"> Parcourir </p>
                    <p class="text-left">Lorem ipsum</p>
                    <p class="text-left">Lorem ipsum</p>
                    <p class="text-left">Lorem ipsum</p>
                    <p class="text-left">⇣ Voir plus...</p>
                </div>
            </div>
        </div>


        <div class="col-lg-8">
            <h2 class="text-center"> Fil d'actualité </h2>

            <div class="card mb-3">
                <div class="card-body">


                    <form action="asset/store-post.php" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                    <textarea class="form-control " name="content" id="summary"
                                              placeholder="exprime toi...."></textarea>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-info">
                                        Publier
                                    </button>
                                </div>
                            </div>



                    </form>
                    <img class="picture mt-2" src="public/img/Home.svg"></a>
                    <img class="emoji mt-2" src="public/img/emoji.svg"></a>
                    <img class="music mt-2" src="public/img/musique.svg"></a>
                </div>


            <?php foreach (getPosts() as $post) {
                require './item-post.php';
            }; ?>

            </div>
        </div>
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>
