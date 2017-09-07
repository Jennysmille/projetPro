<?php
//inclure les fonctions pour la base
require_once("./config/connectionBdd.php");

//récupération des données et les formater un peu
// if (isset($_POST['envoyer'])){
  $nom = $_POST['nom'];
  $prenom= $_POST['prenom'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $message = $_POST['msg'];

  $req = $bdd->prepare('INSERT INTO commandes (nom, prenom, email, tel, message) VALUES(:nom, :prenom, :email, :tel, :message)');
  $req->execute(array(
    'nom'=> $nom,
    'prenom'=> $prenom,
    'email' => $email,
    'tel' => $tel,
    'message' => $message
  ));

  echo  "<p class='produits'>Votre message à bien été envoyé !</p>";



// }
// $reponse->closeCursor(); // Termine le traitement de la requête
?>
  <?php
// header('Location:index.php');
?>
