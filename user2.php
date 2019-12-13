<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
include 'header.php';
?>
<?php 
$firstName = '';
$lastName = '';
if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}
?>
<p><?= $firstName ?></p>
<p><?= $lastName ?></p>
<?php
include 'footer.php';
?>