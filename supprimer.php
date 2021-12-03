<?php
    include "connexion.php";

    if (!empty($_GET['id'])) {
        $id= $_GET['id'];
    } else {
        $id= 0;
    }
    $sql = "DELETE FROM formation WHERE id = $id";
    $req = $con->exec($sql);

    if (!$req) 
    {
        session_start();
        $_SESSION['errors'] = "Suppression non effectuée";
    }

    header('location:acceuil.php');
?>

