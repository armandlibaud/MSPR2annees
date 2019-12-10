<div class= "col-lg-6">
    <div class="card text-center">
        <div class="card-header">
            <p>S'inscrire</p>
        </div>
        <div class="card-body">
            <form action="./asset/register.php" method="POST">
                <div class="form-group">
                    <input name="first_name" type="text" class="form-control" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <input name="last_name" type="text" class="form-control" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control"  placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                    <input name="phonenumber" type="tel" class="form-control" placeholder="numéro de télephone">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Mot de passe" required>
                </div>
                <div class="form-group">
                    <input name="birthday" type="date" class="form-control" placeholder="Date de naissance" required>
                </div>
                <div class="form-group">
                    <select name="gender" class="form-control" id="exampleFormControlSelect1">
                        <option>homme</option>
                        <option>femme</option>
                        <option>autre</option>
                    </select>
                </div>

<button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
