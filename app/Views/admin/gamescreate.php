<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div class="row">
    <div class="col-md-6">
        <form id="creategame" method="post" enctype="multipart/form-data">

            <h4>Ajouter un jeu</h4>
            <br>

            <label for="name">Nom du jeu</label>
            <input class="form-control" type="text" name="name" id="name">

            <br>

            <label for="description">Description</label>
            <textarea class="form-control" rows="8" cols="100" name="description" id="description"></textarea>

            <br>

            <label for="picture">Image du jeu</label>
            <input class="btn btn-default " type="file" name="picture" id="picture"><br>

            <button class="btn btn-default modifier_photo" name="creategame" id="creategame">Ajouter le jeu </button>

        </form>
    </div>


    <div class="col-md-6">
        <h4>Listes des jeux</h4>
        <?php  foreach ($games as $game) { ?>
            <div class="">
               <!-- Titre des jeux -->
               <div class="col-md-2">
                <h3 class="title-game"><?php echo $game['name'] ?></h3>
               </div>
               <div class="col-md-4">
                <p id="description" class="text-justify" ><?php echo $game['description'] ?></p>
               </div>
               <div class="">
                 <a href="<?= $this->url('admin_gamesdelete', ['id' => $game['id']]); ?>" onclick="return confirm('Voulez-vous supprimer ?');">
                   <button type="reset"  name="Effacer" class="btn btn-default btn_message">Supprimer ce jeu</button>
               </a>
               </div>
            </div>
        <?php } ?>
    </div>

</div>


<?php $this->stop('main_content') ?>





<?php $this->layout('layout', ['title' => 'Ajouter un jeu']) ?>

<?php $this->start('main_content') ?>

<div class="row">
   <div class="col-md-12">
       <form id="creategame" method="post" enctype="multipart/form-data">

           <label for="name" class="creategame">Nom du jeu:</label>
           <input class="form-control" type="text" name="name" id="name">

           <br>

           <label for="description" class="creategame">Description:</label>
           <textarea class="form-control" rows="8" cols="100" name="description"></textarea>

           <br>

           <label for="picture" class="creategame">Choisir une image pour le jeu:</label>
           <input class="btn btn-default " type="file" name="picture" id="picture"><br>

           <button class="btn btn-default modifier_photo btn_add_game" name="creategame" id="creategame">Ajouter le jeu </button>

       </form>
   </div>

   <div class="col-md-12">
       <h2 class="text-center listinggame">Listes des jeux</h2><br><br>

       <?php  foreach ($games as $game) { ?>

           <div class="list_game">

            <!-- Fin Image et lien du jeu -->
              <!-- Titre des jeux -->
              <div class="col-md-3">
                <img class="img-responsive" src="assets/img/jeux/<?php echo $game['picture']; ?>" alt="...">
               <h3 class="title-game"><?php echo $game['name'] ?></h3>
               <p id="description" class="text-justify" ><?php echo $game['description'] ?></p>
               <a href="<?= $this->url('admin_gamesdelete', ['id' => $game['id']]); ?>" onclick="return confirm('Voulez-vous supprimer ?');">
                 <button type="reset"  name="Effacer" class="btn btn-default btn_message">Supprimer ce jeu</button>
             </a>
              </div>
           </div>


       <?php } ?>
   </div>

</div>


<?php $this->stop('main_content') ?>
