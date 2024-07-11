<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Basic -->
 <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="../images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="../css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="../css/responsive.css" rel="stylesheet" />

      <script src="https://kit.fontawesome.com/918f3f37c4.js" crossorigin="anonymous"></script>
</head>
<style>

    #a{
        position: relative;
        bottom:350px;
        right:70px;
    }
    #h2{
        position: relative;
        bottom:460px;
        left:500px;
        font-size:65px;

    }
    span{
        color:#1363DF;
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
.Btn_add:hover{
    background-color: #1363DF;
    color:white
}
.Btn_add img {
    margin-right: 5px;
    height: 20px;
    
    
}


img {
    height: 25px;
   
   
}
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
.cardBox {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 30px;
  background-color:  #212528 ;
  position: relative;
  bottom:500px;
  padding-top:150px;
  padding-bottom: 150px;
  margin-top:-60px;
  
}
.cardBox .card {
   
   position: relative;
   background: var(--white);
   padding: 30px;
   border-radius: 10px;
   display: flex;
   justify-content: space-between;
   cursor: pointer;
   box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
 }
 
 .cardBox .card .numbers {
   position: relative;
   font-weight: 500;
   font-size: 2.5rem;
   color: var(--blue);
 }
 
 .cardBox .card .cardName {
   color: var(--black2);
   font-size: 1.1rem;
   margin-top: 5px;
 }
 
 .cardBox .card .iconBx {
   font-size: 3.5rem;
   color: var(--black2);
   position: fixed;
   left: 80px;
 }
 
 .cardBox .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   background: var(--blue);
 }
 .cardBox .card:hover .numbers,
 .cardBox .card:hover .cardName,
 .cardBox .card:hover .iconBx {
   color: var(--white);
 } 
 .cpy{
    margin-top:-60px;
 }
 .title_page{
   font-size: 2.2rem;
	letter-spacing: 0.12rem;
	cursor: pointer;
}


   </style>
<body>
<div class="hero_area" >
         <!-- header section strats -->
         <header class="header_section" style="z-index: 10;height: 96px;display: flex;align-items: center;">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.html"><h2 class="title_page" style="color: #1363DF;">E-<span style="color: #c7e8ff;">Commerce</span></h2></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav" style="padding-left: 355px;">
                     <li class="nav-item">
                           <a class="nav-link" href="../index.php"  >Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="../Client/index.php">Client</a></li>
                              <li><a href="../commande/index.php">Commende</a></li>
                              <li><a href="../details/index.php">Détails Commande</a></li>
                           </ul>
                        </li>>
                        <li class="nav-item">
                           <a class="nav-link" href="../product.php">Produits</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="../deconnexion.php">deconexion</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
</div>
<div class="cardBox" style="margin-top: -375px;background-color: transparent; z-index: 1;">
                <div class="card">
                   
                    <div>
                        <a href="../Client/index.php">
                        <?php include('../cards/sts-client.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Clients</div></a>
                    </div>

                    <div class="iconBx">
                        
                    <ion-icon name="home-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    
                    <div><a href="../commande/index.php">
                    <?php include('../cards/sts-commande.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Commandes</div></a>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="home-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                
                    <div><a href="../product.php">
                    <?php include('../cards/sts-produit.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Produits</div></a>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                   
                    <div><a href="../details/index.php">
                    <?php 
                    include('../cards/sts-detailscommande.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Details Commande</div>    
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <h2 id="h2" style="display: block;  margin-left: 180px;margin-top:-100px; " >Les<span > Clients </span></h2>
            
  

                  
    <div class="container" id="a" >
        <a href="Addclient.php" class="Btn_add"> <img src="../images/plus.png">Ajouter</a>
        
        <div id="a1">
    <table class="table table-hover" style="margin-left: -70px;width: 127%;" >
  <thead>
    <tr >
        <th scope="col">#</th>
        <th scope="col">Nom Client</th>
        <th scope="col">Raison Client</th>
        <th scope="col">Adresse Client</th>
        <th scope="col">Ville Client</th>
        <th scope="col">Pays</th>
        <th scope="col">Telephone</th>
        <th scope="col">Modefier</th>
        <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    
     
      <?php 
                //inclure la page de connexion
                include_once "../connexionBD.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM client");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore client ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            
                            <th scope="row"><?=$row['numClient']?></th>
                            <td><?=$row['nomClient']?></td>
                            <td><?=$row['raisonSocial']?></td>
                            <td><?=$row['adresseClient']?></td>
                            <td><?=$row['VilleClient']?></td>
                            <td><?=$row['pays']?></td>
                            <td><?=$row['telephone']?></td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="Updateclient.php?numClient=<?=$row['numClient']?>"><img src="../images/pen.png"></a></td>
                            <td><a href="Deleteclient.php?numClient=<?=$row['numClient']?>"><img src="../images/trash.png"></a></td>
                        </tr>

                                  

                    
                        <?php

                        
                    }
                    
                }

          
            ?>
   
  </tbody>
</table>










        </div>
   
   
   
   
    </div>
    <div class="cpy_" style="background-color: #171a1c;">
         <p>© 2023 All Rights Reserved By <a href="https://html.design/">Taha iendjaren & khalid Zeroual</a></p>
      </div>
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
</body>
</html>