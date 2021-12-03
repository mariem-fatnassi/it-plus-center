<?php
$id = $_GET['id'];

// Connexion au serveur de Bases de Données
include 'connexion.php';
    
// Préparer la requête SQL
$sql = "SELECT * FROM formation WHERE id = $id";

// Envoyer la requête au serveur
$reponse = $con->query($sql);

$ligne = $reponse->fetch(PDO::FETCH_ASSOC);


echo '<div class="card-header">' . ' Sujet : ' . $ligne['Sujet'] . '<br> formateur : ' . $ligne['Formateur']. '<br> Date de la formation :  ' . $ligne['Date_formation'] . '<br> Temps de la formation :  ' . $ligne['Temps_formation'] . '</div>';

?>