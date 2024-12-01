<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>My Web Sites</title>
        <link rel="icon" type="image/x-icon" href="https://krishook.github.io/BcTn/images/falco.ico">
       	<link rel="stylesheet" href="https://krishook.github.io/BcTn/style.css">
    
    </head>

<!--  https://krishook.github.io/BcTn/  -->

<?php
// Exemple d'un code minimal fonctionnel
echo "Bonjour, le serveur fonctionne correctement !";
?>

<!--<?php
<p>
$motDePasse = "Itcb6971";
if (!isset($_POST['password']) || $_POST['password'] !== $motDePasse) {
    echo '<form method="POST">
             <label>Mot de passe : </label>
             <input type="password" name="password">
             <button type="submit">Valider</button>
          </form>';
    exit;
}
?>
-->

<script>
        function demanderMotDePasse() {
            const motDePasse = "******";
            const saisie = prompt("Entrez le mot de passe pour accéder au site :");
            if (saisie !== motDePasse) {
                alert("Mot de passe incorrect !");
                window.location.href = "https://www.google.com"; // Redirection si le mot de passe est incorrect
            }
        }
</script>

<center>

<!-- Nenu Top Navigation : https://www.w3schools.com/howto/howto_js_topnav.asp -->
<div class="topnav">
  <a class="active" href="https://krishook.github.io/BcTn/index.html">Home</a>
  <a href="https://krishook.github.io/BcTn/Useful-links/index.html">Useful Links</a>
  <a href="https://krishook.github.io/BcTn/00.OpenClassroom/index.html">OpenClassroom</a>
  <a href="https://krishook.github.io/BcTn/01.Oiseaux/index.html">Oiseaux</a>
  <a href="https://krishook.github.io/BcTn/02.HarryPotter/index.html">Harry Potter</a>
  <a href="https://krishook.github.io/BcTn/03.Le%20Trone%20de%20Fer/index.html">Le Trône de Fer</a>
  <a href="https://krishook.github.io/BcTn/05.WWII/index.html">WWII</a>
  <a href="https://krishook.github.io/BcTn/06.JavaScript/index.html">JavaScript</a>
  <a href="https://krishook.github.io/BcTn/07.Pleine Conscience/index.html">Pleine Conscience</a>
  <a href="...">...</a>
</div>


<h1>My Web Sites</h1>
  
<table>

  <!-- id="COL1" : permet de fixer la largeur des col via le format défini dans le fichier CSS -->
  <tr id="COL1">
    <td><a href="https://krishook.github.io/BcTn/Useful-links/index.html">Useful-links</a></td>
  </tr>

  <tr>
    <td><a href="https://krishook.github.io/BcTn/00.OpenClassroom/index.html">00.OpenClassroom</a></td>
  </tr>

  <tr>
    <td><a href="https://krishook.github.io/BcTn/01.Oiseaux/index.html">01.Oiseaux</a></td>
  </tr>

  <tr>
    <td><a href="https://krishook.github.io/BcTn/02.HarryPotter/index.html">02.HarryPotter</a></td>
  </tr>

  <tr>
    <td><a href="https://krishook.github.io/BcTn/03.Le%20Trone%20de%20Fer/index.html">03.Le Trône de Fer</a></td>
  </tr>
  
  <tr>
    <td><a href="https://krishook.github.io/BcTn/05.WWII/index.html">05.WWII</a></td>
  </tr>

  <tr>
    <td><a href="https://krishook.github.io/BcTn/06.JavaScript/index.html">06.JavaScript</a></td>
  </tr>
  
  <tr>
    <td><a href="https://krishook.github.io/BcTn/07.Pleine Conscience/index.html">07.Pleine Conscience</a></td>
  </tr>

</table>

</center>

</body>
</html>
