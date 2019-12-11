
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<link rel= "stylesheet" href="public/css/app.css">
<div class="container">
<div class="row">
    <div class="col-lg-6">

    <h1>    <?php

        echo getAUth()['first_name']; ?> <?php echo  getAUth()['last_name']; ?>
        </h1>

            <?php echo getAuth()['birthday']; ?>

    <p class="titleprofil">CEO & Founder, Example</p>
    <p>Harvard University</p>
    <p><button class="text-center">Message</button></p>
</div></div></div>

<div class="col-lg-6">
    <h2 class="text-center"> Les derniers articles </h2>

    <div class="card mb-3">
        <div class="card-body">

<?php require_once 'includes/footer.php'; ?>