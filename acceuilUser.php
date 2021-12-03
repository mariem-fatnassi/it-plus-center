<?php
	
	require_once 'connexion.php';

  //Si l'utilisateur n'est pas connecté on le redirige vers la page de connexion
  //Il suffit de tester si la variable session $_SESSION['user_session'] existe ou non
  session_start();
  if(!isset($_SESSION['user_session'])) { 
    // s'il n'existe pas dans la variable session 
    // on le redérige vers la page de connexion
    header('Location:login.php');
  }

  // Ici ça veut dire que l'utilisateur est connecté
	//On récupère les données de l'utilisateur à partir de son id (depuis la session)
	$user_id = $_SESSION['user_session'];
	$sql = "SELECT * FROM users WHERE id=$user_id";
  $reponse = $con->query($sql);

  $ligne = $reponse->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" >


    <title>Acceuil</title>
    <style>
        .myphoto{
            width:50px;
            height:50px;
            border-radius:1px solid ;
        }
    </style>
    
</head>
<body>

<?php

     include_once 'templates/navbar2.php';
?>
<div>

<div>
    <div style="" id="global">
    
        <div style="  margin-left : 100px;"  id="tablbord">
           <?php
                 include("tabUser.php");
           ?>
        </div>
    </div>
   
     <script src="js/bootstrap.min.js"></script>
    </div>     
    </div>
</body>
</html>