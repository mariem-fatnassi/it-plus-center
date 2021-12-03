<?php

    // Récupérer le contenu du formulaire

    $nomf = $_FILES['myFile']['name'];
    $type = $_FILES['myFile']['type'];
    $size = $_FILES['myFile']['size'];
    $temp = $_FILES['myFile']['tmp_name'];



    $path = 'images/' . mt_rand(1000, 10000) . $nomf;

    $resultat = move_uploaded_file($temp, $path);

    if ($resultat) {
        echo 'Transfert réussi';
    } else {
        echo 'Transfert échoué';
    }

?>