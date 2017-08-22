<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
	<!-- Accueil utilisateur -->
	<h2 class="text-center">Bonjour <?php echo $w_user['username']?></h2>
	<!-- Fin Accueil utilisateur -->

	<br>

	<!-- Formulaire pour ajouter un jeu a son profil -->

		<div class="row">
			<div class="col-md-8">
				<div class="media">
					<h3>Tes jeux :</h3>
				  	<div class="media-left">
				    	<a href="#">
				      	<img class="media-object" src="..." alt="...">
					    </a>
					</div>
					<div class="media-body">
					    <h4 class="media-heading">Media heading</h4>
					    ...
					</div>
				</div>

				<br>

				<div class="">
					<h3>Ta présentation :</h3>
					<form method="post">
					<label></label>
					<textarea class="form-control" rows="8" cols="100"></textarea><br>
					<button class="btn btn-default" type="submit" name="button">Ajouter/modifier description</button>
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
