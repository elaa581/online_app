<?php
include('config.php');
if(isset($_POST['add'])){
    $NAME= $_POST['name'];
    $PRIX= $_POST['prix'];
    $insert ="INSERT INTO panier (name, prix) VALUES ('$NAME', '$PRIX')";
    mysqli_query($con,$insert);
    header('location:card.php');
}
?>