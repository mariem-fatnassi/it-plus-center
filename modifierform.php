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
        <form action="modifier.php?id=<?= $id ?>" method="post"  class=" box formulaire" enctype="multipart/form-data" >
         <h2 text-align="center"> Mettre à jour une formation</h2>

        <label>Sujet </label>
        <br>
        <input type="text" name="imm"  id="imm" class="zonetext" value="<?= $ligne['Sujet'] ?>">
<br>
        <label>Formateur </label> 
        <br>
        <input type="text" name="txtmarq" id="txtmarq" class="zonetext" placeholder="Enter le nom formateur" value="<?= $ligne['Formateur']?>" required>
<br>
        <label>Date de la formation </label>
        <br>
        <input type="text" name="txtpr" id="txtpr"  class="zonetext" placeholder="Entrer la date" value="<?=$ligne['Date_formation']?>" required>
<br>
        <label>Temps de la formation </label>
        <br>
        <input type="text" name="txttemp" id="txttemp"  class="zonetext" placeholder="Entrer le temps" value="<?=$ligne['Temps_formation']?>" required>
<br>       
<label>Contenu de la formation </label>
        <br>
        <input type="text" name="cont" id="cont"  class="zonetext"  value="<?=$ligne['Contenu']?>" required>
<br>
   <center>    <input type="submit" style="background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px" name="btmod" value="Mettre à jour"></center>
       
     </form>
    </div>
    </body>
    </html>