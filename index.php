<?php
$motDePasse = "Poi-987"; // Remplacez ****** par le mot de passe réel

if (!isset($_POST['password']) || trim($_POST['password']) !== $motDePasse) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Authentification page</title>
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
        //  Couleur bouton
        //      background-color: #007BFF;
                background-color: grey;            
                color: #fff;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
            }
            .form-container button:hover {
                background-color: tan;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <h2>Authentification</h2>
            <form method="POST">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Redirection après validation réussie
header("Location: https://my-web-sites-app-fc79c0bb9acc.herokuapp.com/home.html");
exit;
?>

