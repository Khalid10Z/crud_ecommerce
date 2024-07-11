<?php
  //connexion a la base de données
  include_once "../connexionBD.php";
  //récupération de l'id dans le lien
  $id= $_GET['refProduit'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM detailscommande WHERE refProduit = $id");
  //redirection vers la page index.php
  header("Location:index.php");