<?php require_once 'includes/header.php'; ?>

    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1><?php echo getAUth()['first_name']; ?><?php echo getAUth()['last_name']; ?></h1>
            <?php echo getAuth()['birthday']; ?>
            <p class="titleprofil">CEO & Founder, Example</p>
            <p>Harvard University</p>
            <button class="text-center">Message</button>
        </div>
        <div class="col-lg-6">
            <h2 class="text-center"> Les derniers articles </h2>
            <div class="card mb-3">
                <div class="card-body">
                    coucou
                </div>
            </div>
        </div>
    </div>
    </div>

<?php require_once 'includes/footer.php'; ?>