<?php
include('config.php');

if (isset($_POST['modifier'])) {
    $ID= $_POST['id'];
    $NAME = $_POST['name'];
    $PRIX = $_POST['prix'];

    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_path = "images/" . $image_name;

    // Déplacer l’image d’abord
    if (move_uploaded_file($image_tmp, $image_path)) {
        // Ensuite insérer dans la base
        $update ="UPDATE produit SET name='$NAME', prix='$PRIX' , image='$image_path' where id =$ID";
        if (mysqli_query($con, $update)) {
            echo "<script>alert('Produit modifier avec succès');</script>";
        } else {
            echo "<script>alert('Erreur SQL : " . mysqli_error($con) . "');</script>";
        }
    } else {
        echo "<script>alert('Erreur lors du téléchargement de l’image');</script>";
    }

    // Redirection après tout
    header("Location: products.php");
    exit();
}
?>
