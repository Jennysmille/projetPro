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
       <div class="container">
         <div class="row">
         <div class="col-sm-12">
           <h2 class="title-page">Vos réservations</h2>
            <hr>
                <a href="http://localhost/projetPro/commandeProduits.php">Liens vers nos produits</a><br>
            <hr>
            <div class="col-sm-6">
              <div class="form-group">
                <p>Votre nom :</p>
                <input type="text" name="nom" id="nom" placeholder="Votre nom">
              </div>

              <div class="form-group">
                <p>Votre prénom :</p>
                <input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
              </div>

              <div class="form-group">
                <p>Votre e-mail :</p>
                <input type="email" name="email" id="email" placeholder="Votre email">
              </div>
            </div><br>

            <div class="col-sm-6">
              <div class="form-group">
                <p>Votre téléphone :</p>
                <input type="tel" name="tel" id="tel" placeholder="Votre téléphone">
              </div>
              </div>

              <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
                <p>Votre réservation :</p>
                <textarea name="msg" id="msg"></textarea>
              </div>
            </div><br>

              <div class="form-group">
            <input type="submit" value="Valider">
          </div>

        </div>
      </div>
    </form>
</body>
</html>
