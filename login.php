<div class="container mt-5">
    <div class="row">
        <div class= "col-lg-6">
            <div class="card text-center">
                <div class="card-header">
                    <p>Se connecter </p>
                </div>
                <div class="card-body">
                    <form action="./asset/login.php" method="POST" class="text-center ">
                        <div class="form-group">
                            <label for="identifiant" class="mb-0 mt-3">Votre identifiant</label>
                            <input  name="email" type="text" class="form-control" placeholder="Identifiant" required>
                        </div>

                        <div class="form-group">
                            <label  for="mot de passe" class="mt-3 mb-0">Votre Mot de Passe </label>
                            <input name="password" type="password" class="form-control"  placeholder="Mot de passe" required>
                        </div>
                        <button class="mt-3 rounded bg-light ">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>

