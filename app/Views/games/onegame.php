<?php $this->layout('layout', ['title' => $game['id'] ]); ?>

<?php $this->start('main_content');?>

<div class="contrainer">
    <div class="row">
        <?php  foreach ($onegame as $game) { ?>
    <center>
        <!-- Présentation du jeu -->
        <div class="onegame">
            <h1 class="animated shake"><?php echo $game['name'] ?></h1>
            <br>
            <br>
            <img class="img-responsive" src="<?= $this->assetUrl('img/jeux/' . $game['picture']) ?>" alt="...">
            <br>
            <p><?php echo $game['description'] ?></p>
            <br>
        </div>
        <br>
        <!-- Fin Présentation du jeu -->
        <?php } ?>


        <!-- Les derniers joueurs inscrits  -->
        <h4>Derniers joueurs inscrits</h4>
        <?php  foreach ($userongame as $userongames) { ?>


        <div class="col-md-2 profilejeux">

            <div class="">
                <h3><?php echo $userongames['username'] ?></h3>
                <img class="img-responsive" src="<?= $this->assetUrl('img/avatars/' . $userongames['avatar']) ?>" alt="...">
                <br>
                <p>Pseudo IG : <?php echo $userongames['pseudo'] ?></p>
                <p>Niveau : <?php echo $userongames['niveau'] ?></p>
                <p>Plateforme : <?php echo $userongames['plateforme'] ?></p>
                <button href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>" class="btn btn-primary" name="seeGamers">Voir profil</button>
            </div>
        </div>
        <?php } ?>

        <!-- Fin les derniers joueurs inscrits  -->

        <!-- Les dernières teams inscrites  -->
        <!-- <div class="col-md-6">
            <h4>Dernières équipes inscrites</h4>
            <hr>
            <p>recherche des joueurs</p>
            <hr>
            <button class="btn btn-primary" name="seeTeams">Voir toutes les teams</button>
        </div> -->
        <!-- Fin les dernières teams inscrites  -->
    </div>
</div>
  </center>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

<?php $this->stop('main_content'); ?>
