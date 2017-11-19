<?php

if (isset($_SESSION['connecte'])){ //S'il est connecté on affiche le bouton logout
  echo '<form action="accueil.php" method="POST" />';
  echo '<input type="submit" value="Deconnexion">';
 }
else{ //Sinon le bouton login
  echo '<form action="login.php" method="POST" />';
  //ici les autres champs login/pass
  echo '<input type="submit" value="Connexion">';

 ?>
