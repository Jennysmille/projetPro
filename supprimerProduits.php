<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Supprimer Produits</title>
  </head>
  <body>

    <?php
    require_once("header.php");
    require_once("./config/connectionBdd.php");

    // On définit la variable idPlat en récupérant l'ID de resultatPlat.php
    $idProduits = $_GET['id'];

    // On supprime d'abord la relation entre les plats et le menu
    // On entre dans le champ "id_menus" de la table "relation_menus_plats" pour supprimer l'ID du menu :
    $requete = $bdd->prepare('DELETE FROM `jointure_produits` WHERE id_produits = :id_produits');
    $requete->bindParam(':id_produits', $idProduits);
    $requete->execute();

    // On supprime le menu en lui-même
    // On entre dans le champ de la bdd pour supprimer l'ID du menu:
    $requete = $bdd->prepare('DELETE FROM `produits` WHERE id = :id');
    $requete->bindParam(':id', $idProduits);
    $requete->execute();

    // $produits = $_GET['id'];
    // echo $produits;
    // // On récupère tout le contenu de la table
    // $reponse = $bdd->query('DELETE FROM `produits` WHERE id ="'.$produits.'"');

    // echo  "<p class='produits'>Votre produit a bien été supprimé !</p>";
    header('Location:merciSupp.php');

     ?>
  </body>
</html>
