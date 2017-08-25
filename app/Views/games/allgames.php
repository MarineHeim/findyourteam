<?php $this->layout('layout', ['title' => 'Liste des jeux']); ?>

<?php $this->start('main_content');?>
   <div class="contrainer">
       <div class="row">
           <?php  foreach ($games as $game) { ?>
               <div class="col-md-3 col-sm-4">
                 <center>
                <a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>">
                   <img class="img-responsive" src="assets/img/jeux/<?php echo $game['picture']; ?>" alt="...">
                </a>
                <div class="caption">
                   <h3 class="title-game"><?php echo $game['name'] ?></h3>
                   <p id="description" class="text-justify"><?php echo $game['description'] ?></p>
                   <div class="bouton-align">
                   <p><a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>" class="btn btn-primary SeeAllGames" role="button">Voir jeu</a> </p> <br><br><br>
                   </div>
                </div>
              </center>
               </div>
           <?php } ?>
       </div>
   </div>

<?php $this->stop('main_content'); ?>
