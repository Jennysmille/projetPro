<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Produits</title>
  </head>
  <body>

    <?php require_once ("header.php"); ?>

          <fieldset>
        <legend>Liste des produits</legend></br>

      <table border width="100%">
      <tr>
         <th>Nom</th>
         <th>Poids</th>
         <th>Prix</th>
      </tr>

      <tr align="left">
         <th>Nos Foies Gras Entiers</th>
      </tr>

      <tr>
         <td>Foie gras</td>
         <td>80g</td>
         <td>12.50</td>
      </tr>

      <tr>
         <td>Foie gras</td>
         <td>120g</td>
         <td>18.00</td>
      </tr>

      <tr>
         <td>Foie gras</td>
         <td>180g</td>
         <td>25.00</td>
      </tr>

      <tr>
         <td>Foie gras</td>
         <td>300g</td>
         <td>38.00</td>
      </tr>

      <tr align="left">
         <th>Nos Confits</th>
      </tr>

      <tr>
         <td>2 Cuisses</td>
         <td>450g</td>
         <td>13.50</td>
      </tr>

      <tr>
         <td>3 Cuisses</td>
         <td>675g</td>
         <td>16.50</td>
      </tr>

      <tr>
        <!-- Ailes de canard -->
         <td>4 Manchons</td>
         <td>750g</td>
         <td>13.00</td>
      </tr>

      <tr>
         <td>1/2 Canard</td>
         <td>750g</td>
         <td>16.50</td>
      </tr>

      <tr align="left">
         <th>Nos Spécialités</th>
      </tr>

      <tr>
         <td>Pâté de canard au poivre vert</td>
         <td>80g</td>
         <td>2.40</td>
      </tr>

      <tr>
        <td>Pâté de canard au poivre vert</td>
        <td>190g</td>
        <td>4.90</td>
      </tr>

      <tr>
        <td>Terrine de canard au Banyuls</td>
        <td>80g</td>
        <td>2.40</td>
      </tr>

      <tr>
        <td>Terrine de canard au Banyuls</td>
        <td>190g</td>
        <td>4.90</td>
      </tr>
    </table></br></br>


    <!-- formulaire permettant de choisir un produit -->
    <!-- formulaire pas activer en utilisateur réserver à admin -->
    <div class="produits">
         <form method="post" action="traitementProduits.php" enctype="multipart/form-data">
            <p>
              <label for="nom">Entrez le nom de votre produit :</label>
                 <input type="text" name="nom" id="nom" placeholder="Ex : Foie gras" size="30" maxlength="30" value="" />
                <br />
                <label for="prix">Entrez son prix en euros :</label>
                <input type="text" name="prix" id="prix" placeholder="Ex : 12.50" size="30" maxlength="5" value=""/>
                <br />
                <label for="image">Ajoutez une photo (max 1Mo) :</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="image" id="image"/>
             </p>

           <input type="submit" name="envoyer" value="Envoyer" class="button"/>
         </form>
       </div>
     </fieldset>
     </body>
   </html>
