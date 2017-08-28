<?php $this->layout('layout', ['title' => 'Liste des jeux']); ?>

<?php $this->start('main_content');?>
   <div class="contrainer">
       <div class="row">
         <!-- Boucle jeux -->
           <?php  foreach ($games as $game) { ?>
               <div class="col-md-3 col-sm-4">
                 <center>
                   <!-- Image et lien du jeu -->
                <a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>">
                   <img class="img-responsive" src="assets/img/jeux/<?php echo $game['picture']; ?>" alt="...">
                </a>
                <!-- Fin Image et lien du jeu -->
                <div class="caption">
                  <!-- Titre des jeux -->
                   <h3 class="title-game"><?php echo $game['name'] ?></h3>
                   <!-- Fin titre des jeux -->
                   <div class="desc_game">
                     <!-- Description des jeux -->
                       <p id="description" class="text-justify" ><?php echo $game['description'] ?></p>
                       <!-- Fin Description des jeux -->
                   </div>
                   <div class="bouton-align">
                     <!-- Bouton "voir les jeux" -->
                   <p><a href="<?= $this->url('games_onegame', ['id' => $game['id']]); ?>" class="btn btn-primary SeeAllGames" role="button">Voir jeu</a> </p> <br><br><br>
                   <!-- Fin bouton "voir les jeux" -->
                   </div>
                </div>
              </center>
               </div>
           <?php } ?>
       </div>
   </div>

<?php $this->stop('main_content'); ?>
