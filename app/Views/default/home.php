<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
</div>
<!-- Image /animé -->

<div class="container fondecran">
	<div class="">
		<img class="animationfyt" src="<?= $this->assetUrl('animation/animationfyt.svg') ?>" alt="">
		<div>
			<a href="<?= $this->url('security_register')?>"><center><button id="btn-inscritption" class="btn btn-info btn-lg" name="registerForm">Je m'inscris !</button></center></a>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
