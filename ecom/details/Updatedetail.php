<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
   
</head>
<body>
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
    background-color: #343a40;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
 
}
/* .Btn_add:hover{
    
} */
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
    color: #343a40;
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
    background-color: #343a40;
    border: 1px solid #343a40;
    cursor: pointer;
    color: #fff;
    text-transform: uppercase;
}
input[type="submit"]:hover{
    background-color: #1363DF;
    color:white
   
}


</style>
<?php

         //connexion à la base de donnée
          include_once "../connexionBD.php";
         //on récupère le id dans le lien
          $id = $_GET['refProduit'];
          //requête pour afficher les infos d'un employé
          $req = mysqli_query($con , "SELECT * FROM detailscommande WHERE refProduit = $id");
          $row = mysqli_fetch_assoc($req);


       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($numCommande)){
               //requête de modification
               $req = mysqli_query($con, "UPDATE detailscommande SET  refProduit = '$refProduit' , qteCommandee=$qteCommandee  WHERE refProduit = $id");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index.php");
                }else {//si non
                    $message = "la commande non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Modifier detail de commande  : <?=$row['numCommande']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>numCommande</label>
            <input type="number" name="numCommande" value="<?=$row['numCommande']?>">
            <label>refProduit</label>
            <input type="number" name="refProduit" value="<?=$row['refProduit']?>">
            <label>qteCommandee</label>
            <input type="number" name="qteCommandee" value="<?=$row['qteCommandee']?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>