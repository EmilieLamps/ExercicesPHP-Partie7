<?php
$page = "Exercice 5"; // Définir la variable pour changer le titre !
include 'header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 5</h2>
 <h3 class="text-center pb-5"></h3>
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
            <p>Veuillez entrer vos informations</p>
            <form action="user.php" method="GET">
                <div class="form-group"> 
                    <select name="gender">
                        <option>Madame</option>
                        <option>Monsieur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="number" for="lastName">Nom : </label>
                    <input class="form-control" type="text" name="lastName" id="lastName" />
                </div>
                <div class="form-group">
                    <label class="number" for="firstName">Prénom : </label>
                    <input class="form-control" type="text" name="firstName" id="firstName" />
                </div>
                <div class="text-center pt-2">
                    <button class="btn btn-primary mt-3" type="submit" name="submit" id="button">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= include 'footer.php'; ?>
