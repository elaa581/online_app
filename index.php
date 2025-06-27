<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope Onligne</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div id="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
               <h2> site e-commerce en ligne </h2> 
               <img src="images/ph.jpeg" alt="" width="400px">
               <input type="text" name="name">
               <br>
               <input type="text" name='prix'>
               <br >
               <input type="file" id="file" name='image' style="display:none;">
               <label for="file">choisir une photo </label>
               <button name='enregistrer'>Enregistrer</button>
               <br>
               <a href="products.php">afficher tous les produits</a>

            </form>
        </div>
        <p> Developer BY Elaa Ben Yahia </p>
    </center>
</body>
</html>