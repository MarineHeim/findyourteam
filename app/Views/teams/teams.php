<?php $this->layout('layout', ['title' => 'Teams']) ?>

<?php $this->start('main_content') ?>
	<center>
	<a href="<?= $this->url('teams_create') ?>"><button name="createTeam" class="btn btn-default create_team">Créer ta team</button></a>
</center>
	<br><br>
	<p>Liste des équipes qui recrutent actuellement.</p>



<?php $this->stop('main_content') ?>
