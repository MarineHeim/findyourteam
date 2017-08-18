<?php $this->layout('layout', ['title' => $game['id'] ]); ?>

<?php $this->start('main_content');?>

<?php  foreach ($onegame as $game) { ?>
    <center>
  <h3><?php echo $game['name'] ?></h3>
  <img width="350" src="<?= $this->assetUrl('img/jeux/' . $game['picture']) ?>" alt="...">
  <p><?php echo $game['description'] ?></p>


  <p>Nombre de joueurs : <?php echo $game['nb_player'] ?></p>
  <p>Nombre de Teams : <?php echo $game['nb_team'] ?></p>

  <div class="lastplayers">
      <h4>Derniers joueurs inscrites</h4>
      <button class="btn btn-primary" name="seeGamers">Voir tous les joueurs</button>
  </div>

  <div class="lastteams">
      <h4>Dernières équipes inscrites</h4>
      <button class="btn btn-primary" name="seeTeams">Voir toutes les teams</button>
  </div>


  </center>
<?php }

?>

<?php $this->stop('main_content'); ?>
