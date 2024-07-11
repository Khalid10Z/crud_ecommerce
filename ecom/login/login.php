<?php

//include('menu/menu.php');
if(isset($_POST['valider']) && $_POST['password']=='admin' && $_POST['user']=='admin'){
  session_start ();
     $_SESSION['login'] = $_POST['user'];
     $_SESSION['pwd'] = $_POST['password'];


     header("location:../index.php");
}
?>