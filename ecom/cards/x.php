<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <head>
   <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
</head>
    <title>Document</title>

</head>
<style>
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
  border-radius: 20px;
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
}

.cardBox .card:hover {
  background: var(--blue);
}
.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName,
.cardBox .card:hover .iconBx {
  color: var(--white);
}

</style>
<body>
   
<div class="cardBox">
                <div class="card">
                   
                    <div>
                        <?php include('sts-client.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Client</div>
                    </div>

                    <div class="iconBx">
                        
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    
                    <div>
                    <?php include('sts-commande.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Commandes</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                
                    <div>
                    <?php include('sts-produit.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Produits</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                   
                    <div>
                    <?php 
                    include('sts-detailscommande.php')?>
                        <div class="numbers"><?php echo $R;?></div>
                        <div class="cardName">Details Commande</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
</body>
</html>