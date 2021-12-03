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
 if (!empty($_POST)) {
     //récupération des informations du formulaire
     // la fonctio  trim() permet de supprimer les espaces avant et après un texte
     $uname = trim($_POST['username']);
     $umail = trim($_POST['email']);
     $upass = trim($_POST['password']); 
     $role  =  trim($_POST['role']);
     //Remplissage des messages d'erreurs dans un tableau
     if($uname=="") {
         $errors[] = "Vous devez saisir un nom d'utilisateur!"; 
     } else if ($umail=="") {
         $errors[] = "Vous devez saisir un email"; 
     } else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
         $errors[] = 'Vous devez saisir un email valide';
     } else if($upass=="") {
         $errors[] = "Vous devez saisir un mot de passe";
     } else if(strlen($upass) < 6) {
         $errors[] = "Le mot de passe doit avoir au moins 6 caractères"; 
     } else {
         // Il n'y a pas d'erreurs
         // ON recherche si l'utilisateur existe déjà dans la base
         // La recherche se fait par username ou email
         // Requête SQL
         $sql = "SELECT * FROM users WHERE user_name = '$uname' OR email = '$umail'";

         // Envoyer la requête au serveur et récupérer le résultat
         // le résultat peut être null si la requête est erronée
         $reponse = $con->query($sql);

         //On récupère le résultat
         $ligne = $reponse->fetch(PDO::FETCH_ASSOC);

         //Si l'utilisateur existe on prépare les messages d'erreurs 
         if($ligne['user_name'] == $uname) {
             $errors[] = "Désolé, le nom d'utilisateur existe déjà !";
         }
         else if($ligne['email'] == $umail) {
             $errors[] = "Désolé, l'email existe déjà";
         } else {
          $nomf = $_FILES['myFile']['name'];
          $type = $_FILES['myFile']['type'];
          $size = $_FILES['myFile']['size'];
          $temp = $_FILES['myFile']['tmp_name'];
      
          $path = 'img' . $nomf;
      
          move_uploaded_file($temp, $path);

           $new_password=password_hash($upass,PASSWORD_DEFAULT);

             //si l'utilisateur n'existe pas alors on l'enregistre dans la BD
             // On prépare la requête
             $sql = "INSERT INTO users(user_name,email,userpass,photo,role) VALUES('$uname', '$umail', '$new_password','$nomf','$role')";

             // Envoi et exécution de la requête
             $res = $con->exec($sql);
             
             // Si l'insertion est effectuée avec succès
             // On redérige l'utilisateur vers la page de login (connexion)
             if ($res)
             {
                 header('Location:user.php');
             }
         }
     }
 }
?>










<form class="box formulaire" method="post" enctype="multipart/form-data" >
 
    <h1 class="box-title">ajouter un utilisateur </h1>

    <?php
                        if(isset($errors))
                        {
                             foreach($errors as $error)
                             {
                                 ?>
                                    <div class="alert alert-danger">
                                        <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?>
                                    </div>
                                 <?php
                            }
                        }
                    ?>


  <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required />
  <br>
    <input type="text" class="form-control" name="email" placeholder="Email" required />
    <br>
    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required />
    <br>
    <input type="text" class="form-control" name="role" placeholder="role">
    <br>
    <input type="file"  name="myFile" id="fichier" />
    <br>
    
    <center><input type="submit" name="btadd" value="ajouter" style="background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px">
      
      </center>
 
    <!-- <input type="submit" name="submit" value="S'inscrire" style=" background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px" /> -->
    
</form>
</body>
</html>