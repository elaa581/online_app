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
            <form action="signIn.php" method="post" enctype="multipart/form-data">
               <h2> Register </h2> 
               <input type="text" name="name">
               <br>
               <input type="email" name='Email'>
               <br >
               <input type="password" name='mot de passe'>
               <br >
               
               <button name='register'>Register</button>
               <br>
               <p> Vous avez deja un compt ?
               <a href="login.php">connectez-vous ici</a>
               </p>

            </form>
        </div>
        <p> Developer BY Elaa Ben Yahia </p>
    </center>
</body>
</html>