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
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="stylee.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<?php
  require_once 'connexion.php';
?>
<?php
  require_once 'utilities.php';
?>

<?php
    ?>

</body>
</html>