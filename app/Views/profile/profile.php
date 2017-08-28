<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

	<!-- Accueil utilisateur -->
	<h2 class="text-center">Bonjour <?php echo $w_user['username']?></h2>
	<br><br>
	<!-- Fin Accueil utilisateur -->

	<div class="navigation">
		<!-- <ul>
			<li class="<?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>"><a href="<?= $this->url('profile_profile') ?>">Modifier Profil</a></li>
			<li class="<?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>"><a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>">Voir Profil</a></li>
		</ul> -->
		<a href="<?= $this->url('profile_profile') ?>"><button class="btn  modifier_profil <?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>" type="button" name="modifier_profil">Modifier profil</button></a>
		<a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>"><button class="btn btn-default voir_profil <?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>" type="button" name="modifier_profil">Voir profil</button></a>
	</div>


	<br><br><br>

	<!-- Formulaire pour ajouter un jeu a son profil -->

		<div class="row">
			<div class="col-md-6">
				<div class="Avatar">
					<form id="updateavatar"method="post" enctype="multipart/form-data">
						<input class="btn btn-default " type="file" name="avatar" id="avatar" value=""><br>
						<button class="btn btn-default modifier_photo" name="updateavatar" id="updateavatar">Ajouter/modifier la photo</button>
					</form>
				</div>

				<br><br><br>
				<div class="">
					<h3>Ta présentation :</h3>
					<form id="updatedescription" method="post">
					<textarea class="form-control presentation_gamer" rows="8" cols="100" name="description"></textarea><br>
					<button class="btn btn-default modifier_description" name="updatedescription" id="updatedescription">Ajouter/modifier description</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<form id="updateprofile" method="post">

					<div>
						<label for="username">Username :</label>
						<input class="form-control" type="text" name="username" id="username" value="<?php echo $w_user['username']?>" disabled>
					</div>


					<br>

					<div>
						<label>Choisis ton jeu :</label>

						<select class="form-control" name="jeux" id="jeux" required>
							<option value=""></option>
							<?php  foreach ($games as $game) { ?>
							<option value="<?php echo $game['id']?>"><?php echo $game['name'] ?></option>
							<?php } ?>
						</select>
					</div>

					<br>

					<div>
						<label>Plateforme :</label>
						<select class="form-control" name="plateforme" id="plateforme" required>
						  <option value=""></option>
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
					    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo du joueur" required="Veuillez renseigner ce champ">
				  	</div>

					<div>
						<label>Niveau:</label>
						<select class="form-control" name="niveau" id="niveau" required>
						  <option value=""></option>
						  <option>Débutant</option>
						  <option>Intermédiaire</option>
						  <option>Expérimenté</option>
						  <option>Professionel</option>
					  	</select>
				  	</div>
					<br>
					<button class="btn btn-default ajouter_jeu" id="updateprofile" name="updateprofile">Ajouter le jeu a mon profil</button>
				</form>
			</div>
		</div>

	<!-- Fin formulaire -->


	<br>

	<!-- Fin formulaire profil -->

<?php $this->stop('main_content') ?>
