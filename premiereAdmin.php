
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
    <title>tableau de bord</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php




     include_once 'templates/navbar1.php';
?>
    <div>

      <center> <p><h2>Table des matières</h2></p></center>
<?php
  $reqselect=" SELECT * from formation ";
  $resultat= $con->query($reqselect);
 /* $nbr=count( (array) $resultat);
  echo" <p> total".$nbr."voiture ...</p>";*/

?>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">formation  Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        </div>
        </div>
    </div>
    </div> -->

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
        <div>
<a href="acceuil.php"><button type="button" class="btn btn-secondary">Formations</button></a>

<a href="tabAdminCours"><button type="button" class="btn btn-primary">Cours</button></a>
                  </div>
<div class="container" style="padding-top: 20px" >
           <div class="row">
                    <div class="col" style="margin-bottom : 30px ; ">
                      <div class="card" style="width: 18rem;">
                         <img src="img\Nouveau dossier\16.png" class="card-img-top" alt="..." style="width: 280px; height: 215px;" >
                         <a href="tableaucoursAdmin.php" class="" >الإيقاظ العلمي </a>
                       </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 280px;">
                         <img src="img\Nouveau dossier\31.png" class="card-img-top" alt="..." style="width: 280px; height: 215px;">
                         <a href="premiere.php" class="" > القراءة  </a>
                       </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 280px;">
                         <img src="img\Nouveau dossier\20.jpg" class="card-img-top" alt="..."  style="width: 280px; height: 215px;">
                         <a href="premiere.php" class="" >  رياضيات </a>
                       </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                         <img src="img\Nouveau dossier\19.jpg" class="card-img-top" alt="..." style="width: 280px; height: 215px;">
                                       <a href="premiere.php" class="" > الإنتاج الكتابي  </a>
                       </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 230px;">
                         <img src="img\Nouveau dossier\18.png" class="card-img-top" alt="..."  style="width: 280px; height: 215px;">
                         <a href="premiere.php" class="" > التربية الإسلامية  </a>
                       </div>
                    </div>
                    <div class="col">
                      <div class="card" style="width: 17rem;">
                         <img src="img\Nouveau dossier\21.jpg" class="card-img-top" alt="..."  style="width: 280px; height: 215px;">
                        
                         <div>
                         <a href="premiere.php" class="" > قواعد اللغة</a>
                          </div>
                       </div>
                    </div>
           <br>
           <br>
           <br>
                  
                   
                    
             

      </div>

  <tbody>

 

</div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main1.js"></script>

</body>
</html>