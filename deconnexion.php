<?php
session_start();
$_SESSION = array();
session_destroy();
echo  "<p>Vous êtes déconnecter!</p>";
?>
<a href="connexion.php">Se connecter</a>
