<?php

     require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    
    <link href="css\bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
  
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="img\Nouveau dossier\14.jpg" class="card-img-top" alt="..." style="width: 100px;">
        <a class="navbar-brand">it Plus Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="Login.php">Formation</a>
          <a class="dropdown-item" href="Login.php">Cours</a>
         
      </li>
    
    </ul>
    
    <a href="login.php" class="login">
      <button class="btn btn-outline-primary my-2 my-sm-0">Connexion</button></a>

  </div>
</nav>
    <div id="entete" style="background-color:#7451eb" >
      <div class="row">  
        <div class="col"> <img style="padding-left:90px" src="img\coursformation.png" > </div>      
    <div class="col"><br><br><span class="para" style="
        padding: 2px 0 4px 0;
    outline-color: #7451eb;
    background-color: rgb(0, 54, 104);
    color: rgb(255, 255, 255);
    font-size:40px;
    box-shadow: rgb(0 54 104) 16px 0px 0px, rgb(0 54 104) -16px 0px 0px;"> Votre avenir<br>
commence ici</span>
<br>
      <p style="
      color: #fff;
    margin-bottom: 16px;
">Apprenez à apprendre.<br>
Découvrez les compétences de demain.<br>
Et prenez votre carrière en main.</p>
</div></div>
          </div>
     </div>

     <div class="container" style="padding-top: 70px">
           <div class="row">
                    <div class="col">
                      <div class="" style="width: 18rem;">
                         <img src="img\22.jpg" class="rounded-circle" style="width: 300px;height: 250px;margin:10px" alt="...">
                              <div class="card-body">
                                 <p class="card-text">IT Plus propose des exercices pratiques, des vidéos pédagogiques et un tableau de bord
d&#39;apprentissage personnalisé qui permettent aux apprenants de se former à leur propre
rythme dans et en dehors de la classe.                      </div>
                       </div>
                    </div>
                    <div class="col">
                      <div class="" style="width: 18rem;">
                         <img src="img\23.png" class="rounded-circle" style="width: 300px;height: 250px;margin:10px" alt="...">
                              <div class="card-body">
                                 <p class="card-text">Le centre a pour objectif de mettre « la technologie » au service des enfants des zones les
plus défavorisées, notamment dans les zones rurales et plus particulièrement dans les
établissements scolaires         </div>
                       </div>
                    </div>
                    <div class="col">
                      <div class="" style="width: 18rem;">
                         <img src="img\24.jpg" class="rounded-circle" style="width: 300px;height:250px; margin:10px" alt="...">
                              <div class="card-body">
                                 <p class="card-text">Amélioration des connaissances avec l’appui de l’ordinateur, qui permet aux élèves et
étudiants moyens, qui ont des insuffisances intellectuelles et qui ont des problèmes
d’apprentissages d’améliorer leurs connaissances.  </div>
                       </div>
                    </div>
            </div>

      </div>


<script src="js\jquery-3.5.1.min.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\main.js"></script>
</body>
</html>