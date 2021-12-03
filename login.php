 <?php 
    session_start();
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
        // Récupérer le contenu du formulaire 
        if (!empty($_POST)) {
            $uname =test_input( $_POST['username']);
            $umail = test_input($_POST['username']);
            $upass = test_input($_POST['password']);
            $urole = test_input($_POST['role']);
            // $role=  test_input($_POST['role']);
                        
            // On essaie de connecter l'utilisateur  
            // On vérifie si le login/email avec le mot de passe existe ou non dans la table users
            //On prépare la requête
            $sql = "SELECT * FROM users WHERE user_name=?  OR email=?  LIMIT 1"; // LIMIT 1 c'est un dire récupérer une seule ligne
    
            // Envoyer la requête au serveur et récupérer le résultat
           // $reponse = $con->query($sql);
           $req= $con->prepare($sql);
           $req->execute([$uname , $umail]);
    
            //On récupère le résultat
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
    
            // On vérifie son mot de passe saisie avec celui enregistré dans la BD
           if($ligne['role'] =="admin")
           {
            if (password_verify($upass , $ligne['userpass'])) {
                // Si le mot de passe est correct 
                // alors on lui crée une session 
                 $_SESSION['user_session'] = $ligne['id'];
                // puis on le redérige vers la page d'acceuil du site
                header('Location:acceuil.php');
            }
            else {
              //Si les informations sont erronées
              // on crée la variable $error qui sera affichée en bas
              $error = "informations erronées !";
          }
          }
            else if($ligne['role']=="user"){
              if (password_verify($upass , $ligne['userpass'])) {
                // Si le mot de passe est correct 
                // alors on lui crée une session 
                 $_SESSION['user_session'] = $ligne['id'];
                // puis on le redérige vers la page d'acceuil du site
                header('Location:acceuilUser.php');
            }
            else {
              //Si les informations sont erronées
              // on crée la variable $error qui sera affichée en bas
              $error = "informations erronées !";
          }
          } 
            else {
                //Si les informations sont erronées
                // on crée la variable $error qui sera affichée en bas
                $error = "champs obligatoires !";
            }
        }
    ?>
<form class="box formulaire" method="post" name="login">
<!-- <h1 class="box-logo box-title"></h1> -->
<h1 class="box-title">Connexion</h1>
<div id="error">
        <?php
			//Si la variable $error existe on l'affiche
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                 <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?> !
                </div>
                <?php 
			}
		?>
        </div>
<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
<br>
<input type="password" class="form-control" name="password" placeholder="Mot de passe">
<br>

<br>

<center><button type="submit" style="background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px">
Connexion
</button>
<!-- <input type="submit" value="Connexion" name="submit" style="background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px"> -->
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
</form>
</body>
</html>