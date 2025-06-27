<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Les Produits</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    h3 {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-weight: bold;
      text-align: center;
      margin-top: 20px;
    }

    main {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }

    .card {
      width: 180px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.2s ease;
    }

    .card-img-top {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .card-title {
      font-size: 16px;
      font-weight: bold;
    }

    .card-text {
      color: #333;
      margin: 10px 0;
    }

    .btn {
      padding: 5px 10px;
      margin: 5px;
      border-radius: 5px;
      color: white;
      text-decoration: none;
    }

    .btn-danger {
      background-color: #e74c3c;
    }

    .btn-primary {
      background-color: #3498db;
    }

    .card:hover {
      transform: scale(1.03);
    }
    #aa{
        margin-left:70px;
        text-decoration:none;
        color:white;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="aa" class="navbar-brand" href="card.php"> Panier </a>
    </nav>
<h3>Les Produits Disponibles</h3>

<main>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM produit");

while ($row = mysqli_fetch_array($result)) {
  echo "
    <div class='card'>
      <img src='$row[image]' class='card-img-top'>
      <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[prix] DT</p>
        <a href='val.php? id=$row[id]'class='btn btn-success'>Ajouter ce produit a la panier</a>
      </div>
    </div>
  ";
}
?>
</main>

</body>
</html>