<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}
body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    position: relative;
    
}
.Btn_add {
    width: fit-content;
    margin-bottom:20px;
    background-color: #2bc48a;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
 
}
.Btn_add img {
    margin-right: 5px;
    height: 20px;
}
/*tableau*/
table {
    border-collapse:collapse;
    color: #404040;
    
}
th {
    font-size: 16px;
    border-bottom: 3px solid #ffcb61;
    padding: 5px 20px;
    font-weight: 500;
}
td {
    font-weight: 400;
    padding: 5px 30px;
    font-size: 14px;
    text-align: center;

}
img {
    height: 25px;
   
}
tr:nth-child(2n){
    background-color: #f6f8f8;
}
tr:nth-child(2n) td {
    border-bottom: 1px solid #e0e0e0;
    border-top:  1px solid #e0e0e0;
}
/*Form CSS*/
.form {
    background-color: #f6f8f8;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-radius: 6px;
}
.form form {
    display: flex;
    width: 350px;
    flex-direction: column;
}
.back_btn {
    color: #2bc48a;
    text-decoration: 0;
    display: flex;
    align-items: center;
}
.back_btn img {
    height: 16px;
    margin-right:5px ;
}
h2 {
    margin: 10px 0;
    font-weight: 500;
    text-transform: uppercase;
}
.erreur_message {
    color: red;
    font-size: 12px;
}
label {
    margin-top: 5px;
    text-transform: uppercase;
}
input{
    padding: 5px;
    border: 1px solid #999;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid #ffcb61;
}
input[type="submit"]{
    margin-top: 25px;
    background-color: #2bc48a;
    border: 1px solid #2bc48a;
    cursor: pointer;
    color: #fff;
    text-transform: uppercase;
}

</style>
<body>
<?php
//la connexion a la base de donnees
$con = mysqli_connect('localhost','root','','mini_projet') or die('error');


?>
<?php

         //connexion à la base de donnée
          
         //on récupère le id dans le lien
          $id = $_GET['id'];
          
          //requête pour afficher les infos d'un employé
          $req = mysqli_query($con , "SELECT `refProduit`, `nomProduit`, `prixUnitaire`, `qteStockee`, `indisponible`,`desc` FROM produit WHERE  refProduit = $id");
          $row = mysqli_fetch_assoc($req);

                if(isset($_POST['button'])){
                    extract($_POST);
                     
                        $r = $_POST['num_ref'];
                        $n = $_POST['nom_produit'];
                        $p = $_POST['p_unitaire'];
                        $q = $_POST['qte_stocke'];
                        $i = $_POST['indisponible']; 
                        $ds =$_POST['descp'];
                        
                        mysqli_query($con , "UPDATE  produit set refProduit =$r , nomProduit='$n' , prixUnitaire=$p , qteStockee=$q , indisponible='$i' , `desc`='$ds'  where refProduit=$r");
                        header('location:./index.php');
                        if($req){//si la requête a été effectuée avec succès , on fait une redirection
                            header("location:../product.php");
                          }  else {//si non
                            $message = "Produit non modifié";
                        }
                    
                }
                  


           
    
    ?>

    <div class="form">
    <a href="../product.php" class="back_btn"><img src="../images/back.png"> Retour</a>
       
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            
            

            <label>Ref Produit :</label>
            <input type="text" name="num_ref" value="<?=$row['refProduit']?>">
            <label>Nom Produit :</label>
            <input type="text" name="nom_produit" value="<?=$row['nomProduit']?>">
            <label>Prix Unitaire :</label>
            <input type="text" name="p_unitaire" value="<?=$row['prixUnitaire']?>">
            <label>Quantite stockee :</label>
            <input type="text" name="qte_stocke" value="<?=$row['qteStockee']?>">
            <label>Indisponible : </label>
            <input type="text" name="indisponible" value="<?=$row['indisponible']?>">
            <label>Description :</label>
            <textarea id="story" name="descp" rows="3" cols="33" style="margin-top: 10px; outline: none;"><?=$row['desc']?></textarea>
            <input type="submit" value="Modifier" name="button">


          
        </form>
              

    </div>
</body>
</html>