<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Produit</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con,"select * from produit where id =$ID");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
        <div id="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
               <h2> modifier les produits </h2> 
               <input type="text" name="id" value='<?php echo $data['id']?>'>
               <br>
               <input type="text" name="name" value='<?php echo $data['name']?>'>
               <br>
               <input type="text" name='prix' value=' <?php echo $data ['prix']?>'>
               <br >
               <input type="file" id="file" name='image' style="display:none;">
               <label for="file">Modifier la photo </label>
               <button name='modifier'>Modifier</button>
               <br>
               <a href="products.php">afficher tous les produits</a>

            </form>
        </div>
        <p> Developer BY Elaa Ben Yahia </p>
    </center>
</body>
</html>