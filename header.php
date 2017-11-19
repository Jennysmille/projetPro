<meta charset="utf-8">
<link rel='stylesheet' id='Bootstrap-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css?ver=4.8.1'type='text/css' media='all' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="./assets/img/canard.gif">

<div class="container">
	<div class="row">
  <div class="col-md-12">
	<img id="imageHaut" src="assets/img/canigou.jpg" alt="Ferme Sainte Eulalie Arboussols Pyrénées Orientales">
	</div>
</div>


	<div class="row">
		<div class="col-lg-12">
				<nav class="navbar">
					<ul class="nav nav-tabs nav-tabs-justified">
					  <li><a href="http://localhost/projetPro/index.php">Accueil</a></li>
              <li><a href="http://localhost/projetPro/produits.php">Nos Produits</a></li>
              <li><a href="http://localhost/projetPro/reservation.php">Réservations</a></li>
              <li><a href="http://localhost/projetPro/contact.php">Contact</a></li>
              <li><a href="http://localhost/projetPro/stock.php">Mon stock</a></li>
					</ul>
				</nav>
				<div class="col-lg-6 col-md-6 navbar-left">
				 <?php
				if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']);
				 {

				 ?><br>
			<a class="btn btn-success pull-left" href="login.php">Me déconnecter !</a><br/>
				 <?php
				 }
				 ?>
		 </div>
			</div>
		</div>
	</div>
</div>
