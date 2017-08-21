<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('node_modules/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="icon" type="image/png" href="<?= $this->assetUrl('img/favicon.png') ?>">

</head>
<body>
	<!-- Header -->
	<header>
		<!-- Menu -->
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= $this->url('default_home') ?>">
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
						<li class="<?= ($w_current_route === 'default_home') ? 'active' : ''; ?>"><a href="<?= $this->url('default_home') ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
						<li class="<?= ($w_current_route === 'default_contact') ? 'active' : ''; ?>"><a href="<?= $this->url('default_contact') ?>">Contact</a></li>
						<li class="<?= ($w_current_route === 'games_allgames') ? 'active' : ''; ?>"><a href="<?= $this->url('games_allgames') ?>">Jeux</a></li>
					</ul>



					<?php if ($w_user) { ?>
						<!-- <p class="navbar-text navbar-right"><a class="navbar-link" href="<?= $this->url('default_profile') ?>"><?php echo $w_user['username']; ?></a></p> -->
						<div class="dropdown navbar-right">
  							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    							<?php echo $w_user['username']; ?>
	    						<span class="caret"></span>
						 	</button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a href="<?= $this->url('default_profile') ?>">Mon profil</a></li>
							    <li><a href="<?= $this->url('default_messagerie') ?>">Ma messagerie</a></li>
							    <li><a href="<?= $this->url('default_teams') ?>">Mes teams</a></li>
							  </ul>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?= $this->url('security_logout') ?>">Se déconnecter</a></li>
						</ul>
					<?php } else { ?>
						<form method="POST" action="<?= $this->url('security_login'); ?>" id="signin" class="navbar-form navbar-right" role="form">
							<a href="<?= $this->url('security_register') ?>" class="btn btn-info">Inscription/Connexion</a>
						</form>
					<?php } ?>


					<form class="navbar-form navbar-right">
        				<div class="form-group search">
          					<input id="research" type="text" class="form-control" value="" placeholder="Recherche...">
        				</div>
        					<button type="submit" class="btn btn-default">Go!</button>
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
			<h1 class=text-center><?php echo $title?></h1>
		<?php } ?>
		<br>
		<br>
	<!--Fin titre des pages  -->

		<section>
			<?php if ($w_flash_message) {
				echo '<div class="alert alert-'.$w_flash_message->level.'">'.$w_flash_message->message.'</div>';
			} ?>
			<?= $this->section('main_content') ?>
		</section>


		<!-- Footer  -->
		<footer>

       <div class="container">
               <div class="row text-center">
                  <ul class="list-inline">
                                   <li>
                                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                   </li>

                                   <li>
                                        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                                   </li>

                                   <li>
                                        <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                                   </li>


                         </ul>
                </div>

                <div class="row text-center">
                      <ul class="menu list-inline">

                             <li>
                                <a href="<?= $this->url('default_home') ?>">Accueil</a>
                              </li>

                              <li>
                                 <a href="<?= $this->url('default_contact') ?>">Contact</a>
                              </li>

                              <li>
                                <a href="<?= $this->url('games_allgames') ?>">Jeux</a>
                              </li>
                     </ul>
                 </div>


        </div>

         <div class="row text-center">
         	<p>Find your team © 2017 All rights reserved</p>
         </div>

		</footer>
		<!-- Fin du footer  -->
	</div>

	<script src="<?= $this->assetUrl('node_modules/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('node_modules/jquery-ui/jquery-ui.js') ?>"></script>
	<script src="<?= $this->assetUrl('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('script/login.js') ?>"></script>
	<script src="<?= $this->assetUrl('script/research.js') ?>"></script>
</body>
</html>
