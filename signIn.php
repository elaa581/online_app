<?php
include('config.php');

if (isset($_POST['register'])) {

    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $PSW = $_POST['psw'];

        // Ensuite insérer dans la base
        $insert = "INSERT INTO users (name, email, psw) VALUES ('$NAME', '$EMAIL', '$PSW')";
        if (mysqli_query($con, $insert)) {
            echo "<script>alert('User ajouté avec succès');</script>";
        } else {
            echo "<script>alert('Erreur SQL : " . mysqli_error($con) . "');</script>";
        }
    } 

    // Redirection après tout
    header("Location: login.php");
    exit();

?>


