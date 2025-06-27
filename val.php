<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM produit WHERE id=$ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Acheter le produit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f4f4;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .main {
      width: 100%;
      max-width: 400px;
      background-color: white;
      padding: 30px;
      margin: 80px auto;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      text-align: center;
    }

    .main h2 {
      font-weight: bold;
      font-size: 22px;
      margin-bottom: 30px;
    }

    .main input[type="text"] {
      display: none;
    }

    .main .btn-warning {
      padding: 10px 20px;
      font-weight: bold;
      border: none;
    }

    .main a {
      display: block;
      margin-top: 20px;
      color: #3498db;
      text-decoration: none;
    }

    .main a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="main">
  <form action="insert_card.php" method="post">
    <h2>Tu es sûr d'acheter ce produit ?</h2>

    <input type="text" name="id" value="<?php echo $data['id']; ?>">
    <input type="text" name="name" value="<?php echo $data['name']; ?>">
    <input type="text" name="prix" value="<?php echo $data['prix']; ?>">

    <button name="add" type="submit" class="btn btn-warning">Acheter ce produit</button>

    <a href="shop.php">← Retour à la page des produits</a>
  </form>
</div>

</body>
</html>
