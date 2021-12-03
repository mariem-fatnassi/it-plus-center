<?php
include 'connexion.php';

$ch = $_GET['motcle'];

$sql="SELECT* from automobile where MARQUE LIKE '%$ch%'";

$reponse=$con->query($sql);

while ($ligne =$reponse->fetch(PDO::FETCH_ASSOC))
         {
          
          echo '<div style="border: 1px solid #999;width: 150px;min-height: 200px;margin: 10px;padding-top: 5px;padding-left: 10px;float:left;">';       
          echo '<img src="images/'.$ligne['PHOTO']. ' " class="photocar"><br>';
          echo $ligne['IMM']."<br>";
          echo $ligne['MARQUE']."<br>";
          echo $ligne['PRIX_LOC']."<br>";
          echo "</div>";
         }
          echo "</table>";


?>