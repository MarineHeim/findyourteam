<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
	<div class="navigation">
		<ul>
			<li class="<?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>"><a href="<?= $this->url('profile_profile') ?>">Modifier Profil</a></li>
			<li class="<?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>"><a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>">Voir Profile</a></li>
		</ul>
	</div>
	<!-- Accueil utilisateur -->
	<h2 class="text-center">Bonjour <?php echo $w_user['username']?></h2>
	<!-- Fin Accueil utilisateur -->

	<br>

	<!-- Formulaire pour ajouter un jeu a son profil -->

		<div class="row">
			<div class="col-md-8">
				<div class="Avatar">
					<form id="updateavatar"method="post" enctype="multipart/form-data">
						<label>Avatar</label>
						<input class="btn btn-default" type="file" name="avatar" id="avatar" value="">
						<button class="btn btn-default" name="updateavatar" id="updateavatar">Ajouter/modifier description</button>
					</form>
				</div>

				<div class="">
					<h3>Ta présentation :</h3>
					<form id="updatedescription" method="post">
					<textarea class="form-control" rows="8" cols="100" name="description" id="description"></textarea><br>
					<button class="btn btn-default" name="updatedescription" id="updatedescription">Ajouter/modifier description</button>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<form id="updateprofile" method="post">
					<div>
						<label>Choisis ton jeu :</label>

						<select class="form-control" name="jeux" id="jeux">
							<?php  foreach ($games as $game) { ?>
							<option value="<?php echo $game['id'] ?>"><?php echo $game['name'] ?></option>
							<?php } ?>
						</select>
					</div>

					<br>

					<div>
						<label>Plateforme :</label>
						<select class="form-control" name="plateforme" id="plateforme">
						  <option>---</option>
						  <option>PC</option>
						  <option>PS3</option>
						  <option>PS4</option>
						  <option>XBOX 360</option>
						  <option>XBOX ONE</option>
						</select>
					</div>

					<br>

					<div class="form-group">
					    <label for="pseudo">Pseudo en jeu :</label>
					    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo du joueur">
				  	</div>

					<div>
						<label>Niveau:</label>
						<select class="form-control" name="niveau" id="niveau">
						  <option>---</option>
						  <option>Débutant</option>
						  <option>Intermédiaire</option>
						  <option>Expérimenté</option>
						  <option>Professionel</option>
					  	</select>
				  	</div>
					<br>
					<button class="btn btn-default" id="updateprofile" name="updateprofile">Ajouter le jeu a mon profil</button>
				</form>
			</div>
		</div>

	<!-- Fin formulaire -->


	<br>

	<!-- Fin formulaire profil -->

<?php $this->stop('main_content') ?>
