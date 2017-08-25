<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- Image /animé -->

	<div class="">
		<img class="animationfyt" src="<?= $this->assetUrl('animation/animationfyt.svg') ?>" alt="">
		<div class="container">
			<a href="<?= $this->url('security_register')?>"><center><button id="btn-inscritption" class="btn btn-info btn-lg" name="registerForm">Je m'inscris !</button></center></a>
		</div>
	</div>



<!-- Intro site -->
<section id="intro">
	<div class="text-justify intro">
		<p class="intro text-justify" >LEAGUE OF LEGENDS, OVERWATCH, DOTA 2, STARCRAFT ou encore WOW : tous ces jeux
		ont un point commun, ils ne se jouent pas seul ! Finis, les raids en solitaire.
		Aujourd’hui, les jeux d’équipe prennent une place considérable sur le marché du jeux vidéo.
		La victoire ne dépend plus d’une personne, mais d’une team.
		N’importe quel joueur en ligne a un jour (voire toujours) rencontré des difficultés pour trouver
		un partenaire de qualité. Oubliés, les joueurs aléatoires avec lesquels le feeling ne passe pas, Findyourteam.fr
		débarque et va changer votre expérience de jeux.</p>
	</div>
</section>
<br>
<br>
<!-- Fin intro site -->


<?php $this->stop('main_content') ?>
