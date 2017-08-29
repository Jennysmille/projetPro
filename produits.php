<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Produits</title>
  </head>
  <body>

    <!-- formulaire permettant de choisir un plat -->
    <?php require_once ("header.php"); ?>

    <div class="produits">
      <form method="post" action="traitementProduits.php" enctype="multipart/form-data">
         <p>
           <label for="nom">Entrez le nom de votre produit :</label>
              <input type="text" name="nom" id="nom" placeholder="Ex : Foie gras" size="30" maxlength="30" value="" />
             <br />
             <label for="prix">Entrez son prix en euros :</label>
             <input type="text" name="prix" id="prix" placeholder="Ex : 30.00" size="30" maxlength="5" value=""/>
             <br />
             <label for="image">Ajoutez une photo (max 1Mo) :</label>
             <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
             <input type="file" name="image" value="" id="image">
          </p>

          <input type="submit" name="envoyer" value="Envoyer" class="button">
      </form>
    </div>

  </body>
</html>
