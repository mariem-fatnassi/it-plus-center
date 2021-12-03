<?php

     require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau de bord</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

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
<?php

include_once 'templates/navbar1.php';
?>
    <div>






      <center> <p><h2>Liste des cours </h2></p></center>
<?php
  $reqselect=" SELECT * from cours ";
  $resultat= $con->query($reqselect);
 /* $nbr=count( (array) $resultat);
  echo" <p> total".$nbr."voiture ...</p>";*/

?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">cours  Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           ....
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        </div>
        </div>
    </div>
    </div>

<div  class="container">


<div class="row">
            <div class="col-lg-12">
                <?php
                    if (isset($_SESSION['errors'])) {
                        echo '<div class="alert alert-danger" role="alert">';
                            echo $_SESSION['errors'];
                        echo '</div>';
                        unset($_SESSION['errors']) ;
                    }
                ?>
            </div>
        </div>
        
<p><a href="ajoutercours.php" ><i class="fas fa-plus-circle"></i> Ajouter un cours</a> </p>
<a href="acceuil.php"><button type="button" class="btn btn-primary" >Formations</button></a>   
<table class="table" >
<thead>
    <tr style="background-color:#c2bac2;">
    <th th scope="col"> Id</th>
      
       <th >Titre du cours </th>

       <th >Supprimer </th>
       <th > Modifier</th>
       <th > afficher</th>
       </tr>
  </thead>
  <tbody>
   
 <?php
  while ( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr class="tb">';
    echo '<td><a href="" data-toggle="modal" data-target="#exampleModal">'.$ligne['id']."</td>";
    
    echo "<td>".$ligne['Titre']."</td>";
    


//    echo '<td> <img src="images/'.$ligne['PHOTO']. ' " class="photocar"></td>';
    echo '<td><a  onclick="return confirm(\'supprimer?\')"  href="supprimercours.php?id=' . $ligne['id'] . '"><i class="fas fa-trash-alt"></i></a></td> ';
    echo '<td> <a  onclick="return confirm(\'modifier?\')"  href="modifierformcour.php?id=' . $ligne['id'] . '"><i class="fas fa-pen"></i></a></td>';
    echo '<td> <a    href="affichecoursAdmin.php?id=' . $ligne['id'] . '"><i class="fas fa-eye"></i></a></td>';
    echo "</tr>";
}
 ?>
 
 


</div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main2.js"></script>

</body>
</html>