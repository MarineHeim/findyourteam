<?php $this->layout('layout', ['title' => 'Liste des jeux']); ?>

<?php $this->start('main_content');?>
   <div class="contrainer">
       <div class="row">
           <?php  foreach ($games as $game) { ?>
               <div class="col-md-3 col-sm-4">
                 <center>
                <a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>">
                   <img width="280" height="150" src="assets/img/jeux/<?php echo $game['picture']; ?>" alt="...">
                </a>
                <div class="caption">
                   <h3><?php echo $game['name'] ?></h3>
                   <p><?php echo $game['description'] ?></p>
                   <p>Nombre de joueurs : <?php echo $game['nb_player'] ?></p>
                   <p>Nombre de Teams : <?php echo $game['nb_team'] ?></p>
                   <p><a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>" class="btn btn-primary" role="button">Voir jeu</a> </p> <br><br><br>
                </div>
               </div>
           <?php } ?>
       </div>
   </div>
</center>

<?php $this->stop('main_content'); ?>
