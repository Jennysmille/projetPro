<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Stock</title>
  </head>
  <body>

    <?php require_once ("header.php"); ?>

    <!-- formulaire permettant de choisir un produit -->
    <!-- formulaire pas activer en utilisateur réserver à admin -->

    	<div class="container">
          <div class="row">
    				<div class="col-sm-12">
              <div class="produits">
               <form method="post" action="traitementProduits.php" enctype="multipart/form-data">
                 <h2 class="title-page">Mon stock</h2>
                 <hr>
                  <p>
                    <p for="nom">Entrez le nom de votre produit :</p>
                       <input type="text" name="nom" id="nom" placeholder="Ex : Foie gras" size="30" maxlength="30"/>
                      <br><br>

                      <p for="prix">Entrez son prix en euros :</p>
                      <input type="text" name="prix" id="prix" placeholder="Ex : 12.50" size="30" maxlength="5" value=""/>
                      <br><br>

                      <p for="image">Ajoutez une photo (max 1Mo) :</p>
                      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                      <input type="file" name="image" id="image-photo"/>
                   </p><br>

                   <div class="row">
                   	<div class="col-sm-12">
                 <input type="submit" name="envoyer" value="Envoyer" class="button"/>
               </div>
            </div>
         </form>
       </div>
     </div>
   </div>
   </div>
</body>
</html>
