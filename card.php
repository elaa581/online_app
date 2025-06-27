<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Panier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f9f5;
      font-family: 'Cairo', sans-serif;
    }

    h3 {
      margin-top: 30px;
      color: #f39c12;
      font-weight: bold;
    }

    main {
      width: 90%;
      max-width: 800px;
      margin: 30px auto;
    }

    table {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    thead {
      background-color: #f39c12;
      color: white;
      text-align: center;
    }

    tbody td {
      vertical-align: middle;
      text-align: center;
      background-color: #ffffff;
    }

    .btn-danger {
      background-color: #e74c3c;
      border: none;
    }

    .btn-danger:hover {
      background-color: #c0392b;
    }

    a{
    text-decoration: none;
    font-size: 15px;
    color: rgb(0, 0, 0);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

    tr:hover {
      background-color: #f9f9f9;
    }

  </style>
</head>
<body>

  <center><h3>🛒 Votre Panier</h3></center>

  <main>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nom du produit</th>
          <th>Prix</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM panier");
        while ($row = mysqli_fetch_array($result)) {
          echo "
          <tr>
            <td>$row[name]</td>
            <td>$row[prix]</td>
            <td><a href='del_card.php?id=$row[id]' class='btn btn-danger btn-sm'>Supprimer</a></td>
          </tr>
          ";
        }
        ?>
      </tbody>
    </table>
  </main>
  <center>
    <a href="shop.php">Les Produits</a>
  </center>

</body>
</html>
