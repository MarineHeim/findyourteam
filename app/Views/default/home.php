<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
</div>

<!-- Fond manette -->
<div class="container fondecran">
	<div class="">
		<!-- Image Find your mate -->
		<img class="animationfyt" src="<?= $this->assetUrl('animation/animationfyt.svg') ?>" alt="">
		<!-- Fin image Find your mate -->
		<div>
			<!-- Bouton d'inscription -->
			<a href="<?= $this->url('security_register')?>"><center><button id="btn-inscritption" class="btn btn-info btn-lg" name="registerForm">Je m'inscris !</button></center></a>
			<!-- Fin du bouton d'inscription -->
		</div>
	</div>
</div>
<!-- Fin du fond manette -->
<?php $this->stop('main_content') ?>
