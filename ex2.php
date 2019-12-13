<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
include 'header.php';
?>
<h2 class="text-primary text-center pt-5 pb-2 font-weight-bold">Exercice 2</h2>
<h3 class="text-center pb-5">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</h3>
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
            <p>Veuillez entrer vos informations</p>
            <form action="user2.php" method="GET">
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
<?php
include 'footer.php';
?>