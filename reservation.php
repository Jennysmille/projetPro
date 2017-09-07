<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Formulaire</title>
  </head>
  <body>

    <?php require_once("header.php"); ?>

    <form method="post" action="traitementReserv.php" enctype="multipart/form-data">
   <fieldset>
       <legend>Vos réservations</legend>

    <a href="http://localhost/projetPro/commandeProduits.php">Liens vers nos produits</a>

       <p><label for="nom">Votre nom ?</label>
       <input type="text" name="nom" id="nom" /></p>

       <p><label for="prenom">Votre prénom ?</label>
       <input type="text" name="prenom" id="prenom" /></p>

       <p><label for="email">Votre e-mail ?</label>
       <input type="email" name="email" id="email" /></p>

       <p><label for="tel">Votre numéro de téléphone ?</label>
       <input type="tel" name="tel" id="tel" /></p>

       <p><label for="msg">Votre réservation :</label>
       <textarea name="msg" id="msg" cols="40" rows="4"></textarea></p>

       <p><input type="submit" value="Valider" /></p>
     </fieldset>
    </form>
  </body>
</html>
