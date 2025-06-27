<?php
include('config.php');
 $ID = $_GET['id'];
 mysqli_query($con,"DELETE from produit where id=$ID");
 header('location:products.php');
?>