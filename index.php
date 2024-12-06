<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>My Web Sites</title>
        <link rel="icon" type="image/x-icon" href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/images/falco.ico">
       	<link rel="stylesheet" href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/style.css">
    
    </head>

<body>


<?php
$motDePasse = "******";

if (!isset($_POST['password']) || $_POST['password'] !== $motDePasse) {
    echo '
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de mot de passe</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .form-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 300px;
            }
            .form-container h2 {
                margin-bottom: 20px;
                color: #333;
            }
            .form-container label {
                display: block;
                font-weight: bold;
                margin-bottom: 8px;
                color: #555;
            }
            .form-container input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 14px;
            }
            .form-container button {
                width: 100%;
                padding: 10px;
                background-color: #007BFF;
                color: #fff;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
            }
            .form-container button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <h2>Authentification</h2>
            <form method="POST">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                <button type="submit">Valider</button>
            </form>
        </div>
    </body>
    </html>';
    exit;
}

// Le mot de passe est correct, continuer l'exécution du script...
?>




<!-- <?php
$motDePasse = "Poi-987";
if (!isset($_POST['password']) || $_POST['password'] !== $motDePasse) {
    echo '<form method="POST">
             <label>Mot de passe : </label>
             <input type="password" name="password">
             <button type="submit">Valider</button>
          </form>';
    exit;
}
?> -->
    
<center>

<!-- Nenu Top Navigation : https://www.w3schools.com/howto/howto_js_topnav.asp -->
<div class="topnav">
  <a class="active" href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/index.php">Home</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/Useful-links/index.html">Useful Links</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/00.OpenClassroom/index.html">OpenClassroom</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/01.Oiseaux/index.html">Oiseaux</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/02.HarryPotter/index.html">Harry Potter</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/03.Le%20Trone%20de%20Fer/index.html">Le Trône de Fer</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/05.WWII/index.html">WWII</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/06.JavaScript/index.html">JavaScript</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/07.Pleine Conscience/index.html">Pleine Conscience</a>
  <a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/index.php">PHP</a>
  <a href="...">...</a>
</div>


<h1>My Web Sites</h1>
  
<table>

  <!-- id="COL1" : permet de fixer la largeur des col via le format défini dans le fichier CSS -->
  <tr id="COL1">
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/Useful-links/index.html">Useful-links</a></td>
  </tr>

  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/00.OpenClassroom/index.html">00.OpenClassroom</a></td>
  </tr>

  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/01.Oiseaux/index.html">01.Oiseaux</a></td>
  </tr>

  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/02.HarryPotter/index.html">02.HarryPotter</a></td>
  </tr>

  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/03.Le%20Trone%20de%20Fer/index.html">03.Le Trône de Fer</a></td>
  </tr>
  
  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/05.WWII/index.html">05.WWII</a></td>
  </tr>

  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/06.JavaScript/index.html">06.JavaScript</a></td>
  </tr>
  
  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/07.Pleine Conscience/index.html">07.Pleine Conscience</a></td>
  </tr>
    
  <tr>
    <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/index.php">08.PHP</a></td>
  </tr>

</table>

</center>

</body>
</html>
