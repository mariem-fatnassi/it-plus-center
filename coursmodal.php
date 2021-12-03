<?php
$id = $_GET['id'];

// Connexion au serveur de Bases de Données
include 'connexion.php';
    
// Préparer la requête SQL
$sql = "SELECT * FROM cours WHERE id = $id";

// Envoyer la requête au serveur
$reponse = $con->query($sql);

$ligne = $reponse->fetch(PDO::FETCH_ASSOC);


echo '<div class="card-header">' . ' Titre : ' . $ligne['Titre'] . '<br>';

?>