<!DOCTYPE html>

<html>

<head>
  <title>Statistiques_detailleCommande</title>
 <link rel="stylesheet" type="text/css" href="../css/Bootstrap.css">
   <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    
<?php  include('../connexionBD.php');

$num_result = mysqli_query($con,"SELECT count(*) as total_count from detailscommande ");
$row = mysqli_fetch_object($num_result);
$R=$row->total_count

?>






</body>
</html>