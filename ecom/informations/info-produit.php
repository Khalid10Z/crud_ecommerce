<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .back_btn {
    color: #2bc48a;
    text-decoration: 0;
    display: flex;
    align-items: center;
    position: relative;
    top: 40px;
    
}
.back_btn img {
    height: 16px;
    margin-right:5px ;
    
}
</style>
<body>
<section class="bg-light">
<!-- <a href="../product.php" class="back_btn"><img src="../images/back.png">Retour</a> -->
    <?php
    $con = mysqli_connect('localhost','root','','mini_projet') or die('error');
    $id = $_GET['id'];
    $req = mysqli_query($con , "SELECT `refProduit`, `nomProduit`, `prixUnitaire`, `qteStockee`, `indisponible`,`img`,`desc` FROM produit WHERE  refProduit = $id");
    $row = mysqli_fetch_assoc($req);
    ?>
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="../ajouter/imgs/<?php echo $row['img']?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                       
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">                              
                            </div>
                         </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <!-- titre -->
                            <h1 class="h2"><?php echo $row['nomProduit']?></h1>
                            <!-- prix -->
                            <p class="h3 py-2"><?php echo $row['prixUnitaire']?> DH</p>
                           
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>quantité de stock</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong style="color: #2bc48a;font-weight: 700;"><?php echo $row['qteStockee']?></strong></p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Ref de produit</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong style="color: #2bc48a;font-weight: 700;"><?php echo $row['refProduit']?></strong></p>
                                </li>
                            </ul>
                            <!-- description -->
                            <h6>Description:</h6>
                            <p><?php echo $row['desc'] ?></p>



                            <!-- <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul> -->
                            <!-- Specification -->
                      

                            <form action="../product.php" method="post">
                            
                                <!-- la taile -->
                                <!-- <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                         
                                        </ul>
                                    </div>
                                </div> -->
                              
                                    <!-- <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                                    </div> -->
                                    <div class="col d-grid">
                                        <!-- <label for="qte">Quantité</label> -->
                                        <!-- <input type="number" name="qte_cl"  style="margin-top: 10px ; margin-bottom: 10px;outline: none;" class="form-control" value="1"> -->
                                        <button type="submit" class="btn btn-primary" name="submit" value="addtocard">Acheter</button>
                                    </div>
                                </div>
                            </form>

 <script src="../js/templatemo.js"></script>
   
    
    

</body>
</html>