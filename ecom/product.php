<!DOCTYPE html>
<html>
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
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <link  href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
a{
   text-decoration: none;
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
    position: relative;
    left: 500px;
    top: 55px;
}
.Btn_add img {
    margin-right: 5px;
    height: 20px;
}

  .cardBox {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 30px;
  
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
.title_page{
   font-size: 2.2rem;
	letter-spacing: 0.12rem;
	cursor: pointer;
}

   </style>
   <body class="sub_page" style="background-color: #212528;" >
      <?php include 'connexionBD.php'
      ?>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.html"><h2 class="title_page" style="color: #1363DF;">E-<span style="color: #c7e8ff;">Commerce</span></h2></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="Client/index.php">Client</a></li>
                              <li><a href="commande/index.php">Commende</a></li>
                              <li><a href="details/index.php">Détails Commande</a></li>
                           </ul>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="deconnexion.php">deconexion</a>
                        </li>
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>



      <!-- inner page section -->
     
<div class="cardBox">
                <div class="card">
                   
                    <div><a href="Client/index.php">
                        <?php include('cards/sts-client.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Clients</div></a>
                    </div>

                    <div class="iconBx">
                        
                    <ion-icon name="home-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    
                    <div><a href="commande/index.php">
                    <?php include('cards/sts-commande.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Commandes</div></a>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="home-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                
                    <div><a href="product.php">
                    <?php include('cards/sts-produit.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Produits</div></a>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                   
                    <div><a href="details/index.php">
                    <?php 
                    include('cards/sts-detailscommande.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Details Commande</div></a>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
                    

            
      <!-- end inner page section -->

      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2 style="color:#fff;">
               les produits disponibles

               </h2>
               <a href="ajouter/ajt-client.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
               </div>
            <div class="row">



            
            <?php
              include('connexionBD.php');
              $query = "SELECT * FROM produit ";
              if ($result = mysqli_query($con,$query)) {
                   /* Récupère un tableau associatif */
              while ($rep = mysqli_fetch_assoc($result)) {

               
            ?>
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="supprimer/supprimer.php?id=<?php echo $rep['refProduit']?>" class="option1">
                           Supprimer
                           </a>
                           
                           <a href="modifier/mod-client.php?id=<?php echo $rep['refProduit']?>" class="option2">
                           Modifier
                           </a>
                           <a href="informations/info-produit.php?id=<?php echo $rep['refProduit']?>" class="option3">
                           Informations
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="ajouter/imgs/<?php echo $rep['img'];?>" alt="image produit">
                        
                     </div>
                     <div class="detail-box" style="display: flex;justify-content: space-between;">
                        <h5>
                        <?php echo $rep["nomProduit"];?>
                        </h5>
                        <h6 style="color: red;">
                        <?php echo $rep["prixUnitaire"]; ?><?php  echo ' DH';?>
                        
                        </h6>
                        
                     
                     </div>
                  </div>
               </div>
               <?php }
                  mysqli_free_result($result);
                  mysqli_close ($con);
               }
                  ?>

               
















               <!-- //////////////////////////////
               ////////////////////////////////// -->
           
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <!-- <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.html" class="footer-logo">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By
                     <a href="https://html.design/">Free Html Templates</a>
                  </p>
               </div>
            </div>
         </div>
      </footer> -->
      
      <!-- footer section -->
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