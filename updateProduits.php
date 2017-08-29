<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Modifier Produits</title>
  </head>
  <body>

    <?php
    // Pour les headers et footers il vaut mieux un require_once pour ne pas recharger la requête à chaque fois. Le require_once garde la requête en mémoire => si on utilise plusieurs fois cette requête il vaut mieux la garder en mémoire pour ne la charger qu'une fois.
    require_once("header.php");

    require_once("./config/connectionBdd.php");

    // On définit la variable $idPlat en récupérant le ? idPlat = de la boucle foreach résultatPlat.php
    $idProduits = $_GET['id'];
    // On sélectionne le plat à modifier :
    $requete = $bdd->prepare('SELECT * FROM produits WHERE id = :id_produits'); // :id_plats est inventé ici, il doit crspdre au 1er paramètre de bindParam
    $requete->bindParam(':id_produits', $idProduits);
    $requete->execute();
    // On exécute la requête
    while ($donnees = $requete->fetch())
    {
      // formulaire permettant de modifier un plat
      echo "<div id='produits'>
        <form method='post' action='traitementUpdateProduits.php?id=".$idProduits."' enctype='multipart/form-data'>
          <p>
            <label for='nom'>Modifiez le nom de votre produit :</label>
            <input type='text' name='nom' id='nom' placeholder='Ex : Foie Gras' size='30' maxlength='30' value='" . $donnees['nom'] . "'/>
            <br />
            <label for='prix'>Modifiez son prix en euros :</label>
            <input type='text' name='prix' id='prix' placeholder='Ex : 30.00' size='30' maxlength='5' value='" . $donnees['prix'] . "'/>
            <br />
            <label for='image'>Changez la photo (max 1Mo) :</label>
            <input type='hidden' name='MAX_FILE_SIZE' value='1048576' />
            <input type='file' name='image' value='' id='image'>
          </p>
          <input type='submit' name='envoyer' value='Envoyer' class='button'>
        </form>
      </div>";
    }
    ?>
  </body>
</html>
