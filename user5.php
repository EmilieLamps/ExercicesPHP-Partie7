<?php
$page = "Exercice 5"; // Définir la variable pour changer le titre !
include 'header.php';
?>
<?php 
$gender = '';
$firstName = '';
$lastName = '';
if(isset($_GET['gender'])){
    $gender = $_GET['gender'];
}
if(isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
}
if(isset($_GET['lastName'])){
    $lastName = $_GET['lastName'];
}
if(empty($gender) && empty($firstName) && empty($lastName)){
    
}
?>
<p><?= $gender ?></p>
<p>Votre nom est <?= $lastName ?></p>
<p>Votre prénom est <?= $firstName ?></p>
<?php
include 'footer.php';
?>