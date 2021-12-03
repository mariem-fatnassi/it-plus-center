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
  $reqselect=" SELECT * from cours where id=$id ";
  $resultat= $con->query($reqselect);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

?>
<div style="    width: 400
px
;
margin-top: 1em;
    margin-left: 350px;">
        <form action="modifiercours.php?id=<?= $id ?>" method="post"  class=" box formulaire" enctype="multipart/form-data" >
         <h2 text-align="center"> Mettre à jour un cours</h2>

        <!-- <label>Niveau </label>
        <br>
        <input type="text" name="imm"  id="imm" class="zonetext" placeholder="Enter le niveau" value="<?= $ligne['Niveau'] ?>"required>
<br> -->
        <label>Titre </label> 
        <br>
        <input type="text" name="txtmarq" id="txtmarq" class="zonetext" placeholder="Enter le titre" value="<?= $ligne['Titre']?>" required>
<br>
<label>contenu </label> 
        <br>
        <input type="text" name="txtpr" id="txtpr" class="zonetext" placeholder="Enter le contenu" value="<?= $ligne['Contenu']?>" required>
<br>
          
 
   <center>    <input type="submit" style="background-color: #361336; color: white;  border-radius: 8px; border:none; cursor: pointer; margin: 8px; width: 100px; height : 40px" name="btmod" value="Mettre à jour"></center>
       
     </form>
    </div>
    </body>
    </html>