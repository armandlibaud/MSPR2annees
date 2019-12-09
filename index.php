<?php require_once 'includes/header.php'; ?>
<?php use Carbon\Carbon; ?>

    <section >
        <div class="container">

          <!--  <?php echo Carbon::make(date('Y-m-d 09:25:00'))->diffForHumans(); ?> -->

        </div>
        <div>

        </div>
    </section>

<body>
<main>
    <div class="container mt-5">
    <div class="row">
    <div class= "col-lg-6">
   <div class="card text-center">
       <div class="card-header">
           <p>Se connecter </p>
       </div>
       <div class="card-body">
           <?php require_once 'login.php'; ?>
       </div>
   </div>
    </div>

    <div class= "col-lg-6">
        <div class="card text-center">
            <div class="card-header">
                <p>S'inscrire </p>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
    </div>
    </div>
<?php require_once 'includes/footer.php'; ?>


