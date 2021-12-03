
<?php
    include "connexion.php";
  include "utilities.php";
    // Récupérer
    $id = $_GET['id'];
    
    // Récupérer les informations du client à modifier à partir du formulaire
    $imm = test_input($_POST['imm']);
    $txtmarq = test_input($_POST['txtmarq']);
     $txtpr = test_input($_POST['txtpr']);
    // $tempsf=test_input($_POST['txttemp']);


    

    // Préparer la requête de modification
    $sql = "UPDATE cours SET Niveau = ?, Titre = ?,Contenu= ? WHERE id = ?";
    $req=$con->prepare($sql);
    $req->execute([$imm,$txtmarq,$txtpr,$id]);

    //  if (!$req) 
    // {
    //    session_start();
    //     $_SESSION['errors'] = "Suppression non effectuée";
    // }

    header('location:tableaucoursAdmin.php');
?>