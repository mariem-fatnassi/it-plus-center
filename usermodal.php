<?php
$id = $_GET['id'];

// Connexion au serveur de Bases de Données
include 'connexion.php';
    
// Préparer la requête SQL
$sql = "SELECT * FROM users WHERE id = $id";

// Envoyer la requête au serveur
$reponse = $con->query($sql);

$ligne = $reponse->fetch(PDO::FETCH_ASSOC);


echo '<div class="card-header">' . ' Nom : ' . $ligne['user_name'] . '<br> Email : ' . $ligne['email'].'<br> Role:' .$ligne['role']. '<br>';

?>