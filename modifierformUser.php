<?php
    include "connexion.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>modifier</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
    <div id="container">

<?php
  $id=$_GET['id'];
  $reqselect=" SELECT * from formation where id=$id ";
  $resultat= $con->query($reqselect);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

?>
<div style="    width: 400
px
;
margin-top: 1em;
    margin-left: 350px;">
        <form action="modifierusers.php?id=<?= $id ?>" method="post"  class=" box formulaire" enctype="multipart/form-data" >
         <h2 text-align="center"> Mettre à jour une formation</h2>

        <label>nom </label>
        <br>
        <input type="text" name="nom"  id="nom" class="zonetext" value="<?= $ligne['user_name'] ?>">
<br>
        <label>email </label> 
        <br>
        <input type="text" name="mail" id="mail" class="zonetext" placeholder="Enter le r" value="<?= $ligne['email']?>" required>
<br>
      
        <label>photo de la formation </label>
        <br>
        <input type="file" name="myFile" id="myFile"  class="zonetext" placeholder="Entrer l" value="<?=$ligne['photo']?>" required>
<br>       
<label>role </label>
        <br>
        <input type="text" name="role" id="role"  class="zonetext" placeholder="Entrer la date" value="<?=$ligne['role']?>" required>
<br>
   <center>    <input type="submit" style="background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px" name="btmod" value="Mettre à jour"></center>
       
     </form>
    </div>
    </body>
    </html>