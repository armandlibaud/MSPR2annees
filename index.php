<?php require_once 'includes/header.php'; ?>
<?php use Carbon\Carbon; ?>

    <section>
        <div class="container">

            <?php echo Carbon::make(date('Y-m-d 09:25:00'))->diffForHumans(); ?>

        </div>
    </section>

<body>
<main>
    <h1> Fil d'actualité </h1>


<?php require_once 'includes/footer.php'; ?>


