<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- Intro site -->
<section id="intro">
	<div>
		<h1>Find Your Team</h1>
		<h2>L'esprit d'équipe en quelques clics</h2>
		<p>LEAGUE OF LEGENDS, OVERWATCH, DOTA 2, STARCRAFT ou encore WOW : tous ces jeux
		ont un point commun, ils ne se jouent pas seul ! <br>Finis, les raids en solitaire.
		Aujourd’hui, les jeux d’équipe prennent une place considérable sur le marché du jeux vidéo.<br>
		La victoire ne dépend plus d’une personne, mais d’une team.
		N’importe quel joueur en ligne a un jour (voire toujours) rencontré des difficultés pour trouver
		un partenaire de qualité. Oubliés, les joueurs aléatoires avec lesquels le feeling ne passe pas, Findyourteam.fr
		débarque et va changer votre expérience de jeux.</p>
	</div>
</section>
<!-- Fin intro site -->

<!-- Etape 1  -->
<section id="etape1">
	<div>
		<h2>1. CREE TON PROFIL</h2>
		<p>C'est simple et rapide.</p>
	</div>
</section>
<!-- Fin étape 1 -->

<!-- Etape 2  -->
<section id="etape2">
	<div>
		<h2>2. RECHERCHE DES JOUEURS</h2>
	</div>
</section>
<!-- Fin étape 2 -->

<!-- Etape 3  -->
<section id="etape3">
	<div>
		<h2>3. ECLATE-TOI !</h2>
		<a href="<?= $this->url('security_register')?>"><button class="btn btn-primary" name="registerForm">Je m'inscris !</button></a>
	</div>
</section>
<!-- Fin étape 3 -->


<?php $this->stop('main_content') ?>
