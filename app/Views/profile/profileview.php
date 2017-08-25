<?php $this->layout('layout', ['title' => $oneprofile['id'] ]); ?>

<?php $this->start('main_content') ?>

<div class="navigation">
    <a href="<?= $this->url('profile_profile') ?>"><button class="btn  modifier_profil <?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>" type="button" name="modifier_profil">Modifier profil</button></a>
    <a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>"><button class="btn btn-default voir_profil <?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>" type="button" name="modifier_profil">Voir profil</button></a>
</div>

<br><br>

                <?php  foreach ($oneprofile as $profiles) { ?>
                <div class="row partie1_profil">
                    <div class="col-md-4">
                        <img class="img-responsive photo_profil" src="<?= $this->assetUrl('img/avatars/' . $profiles['avatar']) ?>" alt="...">
                    </div>
                    <div class="col-md-4">
                        <h3 text-align="center"><?php echo $profiles['username'] ?></h3>
                    </div>
                    <div class="col-md-4">
                        <h3 text-align="center">Date d'inscription :</h3>
                        <p><?php echo $profiles['signup_date'] ?></p>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-6 partie2_profil">
                        <h3>Description :</h3>
                        <p><?php echo $profiles['description'] ?></p>
                    </div>
                    <div class="col-md-6 partie3_profil">
                        <?php foreach ($usergame as $usergames) { ?>
                        <div class="usergame">
                                <h4>Jeux : <?php echo $usergames['name'] ?></h4>
                                <h4>Niveau : <?php echo $usergames['niveau'] ?></h4>
                                <h4>Plateforme : <?php echo $usergames['plateforme'] ?></h4>
                                <h4>Pseudo IG : <?php echo $usergames['pseudo'] ?></h4>
                        </div>
                        <hr>
                        <br>

                        <?php } ?>
                    </div>
                </div>

                <br>
            <center>
                <button class="btn btn-default contacter_joueur" name="button">Contacter ce joueur</button>
            </center>

                    <?php } ?>



        <br>

    </div>


<?php $this->stop('main_content') ?>
