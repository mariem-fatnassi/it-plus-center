
<?php
    include "connexion.php";
  include "utilities.php";
    // Récupérer
    $id = $_GET['id'];
    
    // Récupérer les informations du client à modifier à partir du formulaire
    $imm = test_input($_POST['imm']);
    $txtmarq = test_input($_POST['txtmarq']);
    $txtpr = test_input($_POST['txtpr']);
    $tempsf=test_input($_POST['txttemp']);
    $cont=test_input($_POST['cont']);

    // $nomf = $_FILES['myFile']['name'];
    // $type = $_FILES['myFile']['type'];
    // $size = $_FILES['myFile']['size'];
    // $temp = $_FILES['myFile']['tmp_name'];

    // $path = 'images/' . $nomf;

    // $resultat = move_uploaded_file($temp, $path);

    // Préparer la requête de modification
    $sql = "UPDATE formation SET Sujet = ?, Formateur = ?,Date_formation = ? , Temps_formation=? , contenu=? WHERE id = ?";
    $req=$con->prepare($sql);
    $req->execute([$imm,$txtmarq,$txtpr,$tempsf,$cont,$id]);

    //  if (!$req) 
    // {
    //    session_start();
    //     $_SESSION['errors'] = "Suppression non effectuée";
    // }

    header('location:acceuil.php');
?>
