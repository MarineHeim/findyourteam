<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
	<!-- Accueil utilisateur -->
	<h2>Bonjour <?php echo $w_user['username']?></h2>
	<!-- Fin Accueil utilisateur -->
	<br>
	<!-- Photo de profil -->
	<button type="button" name="avatar">Sélectionne une photo de profil</button>
	<!-- Fin photo de profil -->
	<br>
	<br>
	<br>
	<!-- Formulaire profil -->
	<form method="post">
		<div>
			<label>Choisis ton jeu:</label>
			<select>
				<option value="">League of Legends</option>
				<option value="">Battlefield 4</option>
				<option value="">Call of duty</option>
				<option value="">CS GO</option>
				<option value="">Diablo 3</option>
				<option value="">Dota 2</option>
				<option value="">Fifa 17</option>
				<option value="">Heroes of the Storm</option>
				<option value="">Overwatch</option>
				<option value="">World of warcarft</option>
			</select>
		</div>
		<br>
		<div>
			<label>Plateforme:</label>
			PC <input type="checkbox" name="pc">
			PS3 <input type="checkbox" name="ps3">
			PS4 <input type="checkbox" name="ps4">
			XBOX360 <input type="checkbox" name="xbox360">
			XBOXONE <input type="checkbox" name="xboxone">
		</div>
		<br>
		<div>
			<label>Niveau:</label>
			Débutant <input type="checkbox" name="débutant">
			Moyen <input type="checkbox" name="moyen">
			Expérimenté <input type="checkbox" name="experimente">
		</div>
		<br>
		<div>
			<label>Description:</label> <br>
			<textarea name="description" rows="8" cols="100"></textarea>
		</div>
	</form>
	<br>
	<button type="submit" name="button">Valider mon profil</button>
	<!-- Fin formulaire profil -->

<?php $this->stop('main_content') ?>
