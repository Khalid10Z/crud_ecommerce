<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link  href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
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
    
    
    if(isset($_POST['ajoute'])){
     extract($_POST);
      if (isset($_POST['nom_produit']) && isset($_POST['p_unitaire']) && isset($_POST['qte_stocke'])  && isset($_POST['repons']) && isset($_POST['desc'])){   
           // ajoute_client($_POST['num_client'],$_POST['nom_client'],$_POST['raison_sociale'],$_POST['adr_client'],$_POST['ville_client'],$_POST['pays'],$_POST['telephone'
           
           $con = mysqli_connect('localhost','root','','mini_projet') or die('error');


        //    $r = $_POST['num_ref'];
           $n = $_POST['nom_produit'];
           $p = $_POST['p_unitaire'];
           $q = $_POST['qte_stocke'];
           $i = $_POST['repons']; 
           $ds = $_POST['desc']; 
           
           $image=$_FILES['image']['name'];
           $filename=uniqid().$image;
           move_uploaded_file($_FILES['image']['tmp_name'],"imgs/".$filename);


        //    $sql = "INSERT INTO produit VALUES('$r','$n',$p,$q,'$i','$filename')";
           $req = mysqli_query($con,"INSERT INTO produit VALUES(null,'$n',$p,$q,'$i','$filename','$ds')");
            if($req){
                //si la requête a été effectuée avec succès , on fait une redirection
                header("location:../product.php");
            }
            else {
                //si non
                $message = "Produit non ajouté";
                

            }
       }
      else{
               //si non
               $message = "Veuillez remplir tous les champs !";
        }
    }
    


    ?>
    <div class="form">
    <a href="../product.php" class="back_btn"><img src="../images/back.png">Retour</a>
        <h2>Ajouter un produit</h2>
        <p class="erreur_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="#" method="POST"  enctype="multipart/form-data">
            <!-- <label>Ref Produit :</label>
            <input type="text" name="num_ref"  > -->
            <label>Nom Produit :</label>
            <input type="text" name="nom_produit">
            <label>Prix Unitaire :</label>
            <input type="text" name="p_unitaire">
            <label>Quantite stockee :</label>
            <input type="text" name="qte_stocke">
            
            <label>Description :</label>
            <textarea id="story" name="desc" rows="3" cols="33" style="margin-top: 10px; outline: none;"> </textarea>
            <!-- <input type="text" name="indisponible"> -->
            <label>Indisponible : </label>
            <div class="container">
            <div class="d-flex justify-content-evenly">
                
                <input type="radio" class="btn-check" name="repons" id="success-outlined"  value='1'  >
                <label class="btn btn-outline-success" for="success-outlined" >yes</label>
                <input type="radio" class="btn-check" name="repons" id="danger-outlined" value='0'  >
                <label class="btn btn-outline-danger" for="danger-outlined">no</label>
            </div></div>
           <label >Image : </label>
            <input type="file" name="image"  style="background-color: #2bc48a; color: #e0e0e0; font-weight: 700px;
            outline: none;
            "> 
            
            <input type="submit" name="ajoute">
        </form>
    </div>
</body>
</html>