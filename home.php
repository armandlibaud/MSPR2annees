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

                        echo getAUth()['first_name']; ?> <?php echo  getAUth()['last_name']; ?>
                    </h5>
                    <h5>
                        <?php echo getAuth()['birthday']; ?>
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

                    <div class="form-group">
                        <div class="input-group-append">
                            <form action="./asset/add.php">
                            <textarea class="form-control " name="content" id="summary" placeholder="exprime toi...."></textarea>

                            <button type="submit" class="btn btn-primary rounded bg-info text-decoration-none ">Publier </button>
                            </form>
                        </div>
                    </div>
                    <img class="picture"  src="public/img/Home.svg"></a>
                    <img class="emoji ml-2" src="public/img/emoji.svg"></a>
                    <img class="music ml-2" src="public/img/musique.svg"></a>
                </div>

                <div class="card mb-3 mt-2 text-center">
                    <div class="card-body">
                        <img src="https://placehold.it/600x400">

                        <p class="mt-3 text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, sapiente! Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit. Accusamus eum fugit magni nihil, possimus veniam
                            vitae voluptatum!
                            Maiores, reprehenderit, voluptate!</p>
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-primary  rounded bg-info "> Liker </button>
                        <button class="btn btn-primary rounded bg-info "> Commenter </button>
                        <button class="btn btn-primary  rounded bg-info "> Partager </button>
                    </div>
                </div>

                <div class="card mb-3 text-center">
                    <img src="https://placehold.it/600x400">

                    <p class="mt-3 text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, sapiente! Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit. Accusamus eum fugit magni nihil, possimus veniam
                        vitae voluptatum!
                        Maiores, reprehenderit, voluptate!</p>

                    <div class="mb-3 mt-3">
                        <button class="btn btn-primary  rounded bg-info "> Liker </button>
                        <button class="btn btn-primary rounded bg-info "> Commenter </button>
                        <button class="btn btn-primary  rounded bg-info "> Partager </button>
                    </div>
                </div>

                <div class="card mb-3 text-center">
                    <div class="card-body">
                        <img src="https://placehold.it/600x400">

                        <p class="mt-3 text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, sapiente! Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit. Accusamus eum fugit magni nihil, possimus veniam
                            vitae voluptatum!
                            Maiores, reprehenderit, voluptate!</p>

                        <div class="mb-3 mt-3 text-center">
                            <button class="btn btn-primary  rounded bg-info "> Liker </button>
                            <button class="btn btn-primary rounded bg-info "> Commenter </button>
                            <button class="btn btn-primary  rounded bg-info "> Partager </button>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 text-center">
                    <div class="card-body">
                        <img src="https://placehold.it/600x400">

                        <p class="mt-3 text-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, sapiente! Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit. Accusamus eum fugit magni nihil, possimus veniam
                            vitae voluptatum!
                            Maiores, reprehenderit, voluptate!</p>

                        <div class="mb-3 mt-3 text-center">
                            <button class="btn btn-primary  rounded bg-info "> Liker </button>
                            <button class="btn btn-primary rounded bg-info "> Commenter </button>
                            <button class="btn btn-primary  rounded bg-info "> Partager </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php require_once 'includes/footer.php'; ?>
