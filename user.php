<?php
$page = "Exercice 1"; // Définir la variable pour changer le titre !
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
<p><?= $firstName ?></p>
<p><?= $lastName ?></p>
<?php
include 'footer.php';
?>