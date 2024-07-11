<?php
  //connexion a la base de données
  include_once "../connexionBD.php";
  //récupération de l'id dans le lien
  $id= $_GET['numCommande'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM commande WHERE numCommande = $id");
  //redirection vers la page index.php
  header("Location:index.php")
?>