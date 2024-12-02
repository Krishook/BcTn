<head>
    <title>php</title>
</head>

<body>
<?php
$motDePasse = "Itcb6971";
if (!isset($_POST['password']) || $_POST['password'] !== $motDePasse) {
    echo '
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Authentification</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .login-container {
                background: #ffffff;
                padding: 20px 30px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            .login-container h2 {
                margin-bottom: 20px;
                color: #333;
            }
            .login-container label {
                font-size: 14px;
                color: #555;
            }
            .login-container input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
            .login-container button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
            .login-container button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Authentification requise</h2>
            <form method="POST">
                <label for="password">Mot de passe :</label><br>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                <button type="submit">Valider</button>
            </form>
        </div>
    </body>
    </html>';
    exit;
}
?>

<!-- Bouton de retour à la page d'accueil -->

<button class="button button" onclick="goBack()">Home</button>

<script>
function goBack() {
        window.location.href = 'https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/index.php'; // Remplacez par l'URL de votre choix
        }
</script>

    
<h1>PHP</h1>

<table>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/info.php" target="_blank">info.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file00.php" target="_blank">file00.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file01.php" target="_blank">file01.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file02.php" target="_blank">file02.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file03.php" target="_blank">file03.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file04.php" target="_blank">file04.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file05.php" target="_blank">file05.php</a></td>
    </tr>

    <tr>
      <td><a href="https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/08.PHP/file06.php" target="_blank">file06.php</a></td>
    </tr>

  </table>

</body>
