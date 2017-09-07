<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Résultat</title>
  </head>
  <body>

    <!-- Page qui affiche tous les plats -->
    <?php
    // On se connecte à la bdd
    require_once("./config/connectionBdd.php");
    require_once("header.php");

    $reponse = $bdd->query('SELECT * FROM produits ORDER BY produits.id DESC ');
    $produits = $reponse;
     ?>

     <div class="texte">
     <h1>Nos produits du moment :</h1>
    	</div>

    <?php
while($produits = $reponse->fetch())
{
    echo "<p id='produits'>Produits : " . $produits['nom'] . " </p>";
    echo "<p id='produits'>Prix : " . $produits['prix'] . " € </p>";
    echo "<p id='produits'><Image : " . $produits['image'] . " </p>";
    echo "<p id='produits'><img src='./assets/img/" . $produits['image'] . "' </p><br />";

    echo "<a href='updateProduits.php?id=" . $produits['id'] . "'><input type='submit' value='Modifier' class='button' name='id'></a>";
    echo "<a href='supprimerProduits.php?id=" . $produits['id'] . "'><input type='submit' value='Supprimer' class='button' name='id'></a><br /><br />";
}

    ?>
  </body>
</html>
