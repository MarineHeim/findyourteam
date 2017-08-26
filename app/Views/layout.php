<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('node_modules/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png') ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">



</head>
<body>
	<!-- Header -->
	<header>
		<!-- Menu -->
		<nav class="navbar navbar-default container">
			<div >
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar_brand" href="<?= $this->url('default_home') ?>">
					<img class="img-responsive" src=" <?= $this->assetUrl('img/logofytblanc.png'); ?>" alt="logo_fyt">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php
						// Sans ternaire
						if ($w_current_route === 'default_home') {
							//echo 'active';
						} else {
							echo '';
						}
						// Avec ternaire
						($w_current_route === 'default_home') ? 'active' : ''; // "?" correspond au if et le ":" au else
						?>
						<li class="<?= ($w_current_route === 'default_home') ? 'active' : ''; ?>"><a href="<?= $this->url('default_home') ?>"><span class="glyphicon glyphicon-home" aria-hidden="true" id="accueil_home"></span></a></li>
						<li class="<?= ($w_current_route === 'default_contact') ? 'active' : ''; ?>"><a href="<?= $this->url('default_contact') ?>" id="accueil_contact">Contact</a></li>
						<li class="<?= ($w_current_route === 'games_allgames') ? 'active' : ''; ?>"><a href="<?= $this->url('games_allgames') ?>" id="accueil_jeux">Jeux</a></li>
					</ul>



					<?php if ($w_user) { ?>
						<!-- <p class="navbar-text navbar-right"><a class="navbar-link" href="<?= $this->url('profile_profile') ?>"><?php echo $w_user['username']; ?></a></p> -->
						<div class="dropdown navbar-right">
  							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    							<?php echo $w_user['username']; ?>
	    						<span class="caret"></span>
						 	</button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a href="<?= $this->url('profile_profile') ?>">Mon profil</a></li>
							    <li><a href="<?= $this->url('messagerie_envoi') ?>">Ma messagerie</a></li>
							  </ul>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?= $this->url('security_logout') ?>">Se déconnecter</a></li>
						</ul>
					<?php } else { ?>
						<form method="POST" action="<?= $this->url('security_login'); ?>" id="signin" class="navbar-form navbar-right" role="form">
							<a id="sign" href="<?= $this->url('security_register') ?>" class="btn btn-info">Inscription / Connexion</a>
						</form>
					<?php } ?>


					<form class="navbar-form navbar-right">
        				<div class="form-group search">
          					<input id="research" type="text" class="input-search form-control" value="" placeholder="Recherche...">

        					<button  type="submit" class="btn btn-default btn-search">Go !</button>
							</div>
      				</form>
				</div>
			</div>
		</nav>
		<!-- Fin du menu -->
	</header>
	<!-- Fin du header -->

	<!--Titre des pages  -->
	<div class="container">
		<?php if($title != 'Accueil'){; ?>
			<h1 class="text-center animated shake"><?php echo $title?></h1>
		<?php } ?>

	<!--Fin titre des pages  -->

		<section>
			<?php if ($w_flash_message) {
				echo '<div class="alert alert-'.$w_flash_message->level.'">'.$w_flash_message->message.'</div>';
			} ?>
			<?= $this->section('main_content') ?>
		</section>
	</div>

		<!-- Arrow-top -->
		<div class="container">
				<a href="#"><i id="arrow-top" title="Retour en haut" class="fa fa-arrow-circle-up fa-3x"></i></a>
		</div>

		<!-- Arrow-top -->
		<!-- Footer  -->
		<div class="clear">

			<footer >
					<div id="social-icone" class="">
		         <ul class="list-inline text-center">
		            <li>
		               <a href="https://fr-fr.facebook.com/"><i id="socialicone" class="fa fa-facebook-square fa-2x"></i></a>
		            </li>
		            <li>
		               <a href="https://fr.linkedin.com/"><i id="socialicone" class="fa fa-linkedin-square fa-2x"></i></a>
		            </li>
		            <li>
		               <a href="https://www.tumblr.com/"><i id="socialicone" class="fa fa-tumblr-square fa-2x"></i></a>
		            </li>
		         </ul>
		       </div>
		       <div class="">
		             <ul class="menu list-inline text-center">
		              <li>
		                 <a id="footer-menu" href="<?= $this->url('default_home') ?>">Accueil</a>
		               </li>
		               <li>
		                  <a id="footer-menu" href="<?= $this->url('default_contact') ?>">Contact</a>
		               </li>
		               <li>
		                 <a id="footer-menu" href="<?= $this->url('games_allgames') ?>">Jeux</a>
		               </li>
		             </ul>
		        </div>
		 			 <div class="text-center">
		 				 <p class="droits-legal" >Find your team © 2017 All rights reserved</p>
		 			 </div>
			</footer>
		</div>

		<!-- Fin du footer  -->


	<script src="<?= $this->assetUrl('node_modules/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('node_modules/jquery-ui/jquery-ui.js') ?>"></script>
	<script src="<?= $this->assetUrl('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('anime-master/anime.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('script/login.js') ?>"></script>
	<script src="<?= $this->assetUrl('script/research.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/arrow.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/bouton-contact.js') ?>"></script>


</body>
</html>
