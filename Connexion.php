<?php
session_start();
include('config.php');

if (isset($_POST['Connexion'])) {

    
    $EMAIL = $_POST['email'];
    $PSW = $_POST['psw'];

    $query = "select * from users where email ='$EMAIL' ";
    $result = mysqli_query($con, $query);

        // Ensuite insérer dans la base
    
        if ($user = mysqli_fetch_assoc($result)) {
            if (password_verify($PSW, $user['psw'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                echo "<script>alert('Connexion réussie !'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('Mot de passe incorrect');</script>";
            }
        } else {
            echo "<script>alert('Email introuvable');</script>";
        }
    } 

    // Redirection après tout
    header("Location: shop.php");
    exit();

?>


