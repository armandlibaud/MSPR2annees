<div class="collapse py-5 " id="debug">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        $_GET
                    </div>
                    <div class="card-body">
                        <?php var_dump($_GET); ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        $_POST
                    </div>
                    <div class="card-body">
                        <?php var_dump($_POST); ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        $_SESSION
                    </div>
                    <div class="card-body">
                        <?php var_dump($_SESSION); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>