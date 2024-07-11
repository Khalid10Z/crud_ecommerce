<?php
  //connexion a la base de données
  $con = mysqli_connect('localhost','root','','mini_projet') or die('error');

  //récupération de l'id dans le lien
  $id= $_GET['id'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM produit WHERE refProduit=$id");
  //redirection vers la page index.php
  header('location:../product.php');
?>