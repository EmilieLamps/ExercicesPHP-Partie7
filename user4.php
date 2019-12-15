<?php
$page = "Exercice 4"; // Définir la variable pour changer le titre !
include 'header.php';
$firstName = '';
$lastName = '';
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}
if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}
?>
<p>Votre nom est <?= $firstName ?></p>
<p>Votre prénom<?= $lastName ?></p>
<?= include 'footer.php'; ?>