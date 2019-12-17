<?php
$page = "Exercice 6"; // Définir la variable pour changer le titre !
include 'header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 6</h2>
 <h3 class="text-center pb-5"></h3>
    <?php
        if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) { 
    ?>
    <p><?= 'Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['lastname']) . '. Comment allez-vous ' . htmlspecialchars($_POST['firstname']) . '?'; ?></p>
    <?php } else { ?>
        <form action="#" method="post">
            <div class="form-group">
                <label for='gender'>Civilité : </label>
                <select id='gender' class="custom-select" name="gender">
                    <option value="monsieur">Monsieur</option>
                    <option value="madame">Madame</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastname">Votre nom : </label>
                <input id="lastname" class="form-control" type="text" name="lastname" />
            </div>
            <div class="form-group">
                <label for="firstname">Votre prénom : </label>
                <input id="firstname" class="form-control" type="text" name="firstname" />
            </div>
            <input class="btn btn-outline-dark" type="submit" value="Envoyer" />
        </form>
    <?php } ?>
<?php
include 'footer.php';
?>
