<?php $this->layout('layout', ['title' => $game['id'] ]); ?>

<?php $this->start('main_content');?>

<div class="contrainer">
    <div class="row">
        <?php  foreach ($onegame as $game) { ?>
    <center>
        <!-- Présentation du jeu -->
        <div class="onegame">
            <h3><?php echo $game['name'] ?></h3>
            <br>
            <br>
            <img class="img-responsive" src="<?= $this->assetUrl('img/jeux/' . $game['picture']) ?>" alt="...">
            <br>
            <p><?php echo $game['description'] ?></p>
            <br>
            <p>Nombre de joueurs : <?php echo $game['nb_player'] ?></p>
            <p>Nombre de Teams : <?php echo $game['nb_team'] ?></p>
        </div>
        <br>
        <!-- Fin Présentation du jeu -->


        <!-- Les derniers joueurs inscrits  -->
        <div class="col-md-6">
            <h4>Derniers joueurs inscrits</h4>
            <hr>
            <p>est disponible pour jouer</p>
            <hr>
            <button class="btn btn-primary" name="seeGamers">Voir tous les joueurs</button>
        </div>
        <!-- Fin les derniers joueurs inscrits  -->

        <!-- Les dernières teams inscrites  -->
        <div class="col-md-6">
            <h4>Dernières équipes inscrites</h4>
            <hr>
            <p>recherche des joueurs</p>
            <hr>
            <button class="btn btn-primary" name="seeTeams">Voir toutes les teams</button>
        </div>
        <!-- Fin les dernières teams inscrites  -->
    </div>
</div>
  </center>
<?php }

?>

<?php $this->stop('main_content'); ?>
