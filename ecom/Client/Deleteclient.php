<?php
  //connexion a la base de données
  include_once "../connexionBD.php";
  //récupération de l'id dans le lien
  $id= $_GET['numClient'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM client WHERE numClient = $id");
  if($req){
    include_once "../commande/Deletecom.php" ;
  echo "la commande de ce client  est supprimer";
  }
  //redirection vers la page index.php
  header("Location:index.php")
?>