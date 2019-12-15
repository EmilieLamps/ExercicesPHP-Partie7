<?php
$page = "Exercice 3"; // Définir la variable pour changer le titre !
include 'header.php';
?>
<?php 
$firstName = '';
$lastName = '';
if(isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
}
if(isset($_GET['lastName'])){
    $lastName = $_GET['lastName'];
}
?>
<p>Votre nom est <?= $lastName ?></p>
<p>Votre prénom est <?= $firstName ?></p>
<?php
include 'footer.php';
?>