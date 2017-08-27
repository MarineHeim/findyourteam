<?php $this->layout('layout', ['title' => $oneprofile['id']]); ?>

<?php $this->start('main_content') ?>

<div class="navigation">
    <a href="<?= $this->url('profile_profile') ?>"><button class="btn  modifier_profil <?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>" type="button" name="modifier_profil">Modifier profil</button></a>
    <a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>"><button class="btn btn-default voir_profil <?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>" type="button" name="modifier_profil">Voir profil</button></a>
</div>


                <?php  foreach ($oneprofile as $profiles) {;?>
                    <div class="rela-block">
                        <div class="rela-block profile-card">
                                <img class="profile-pic" src="<?= $this->assetUrl('img/avatars/' . $profiles['avatar']) ?>" alt="<?= $profiles['avatar'] ?>">
                            <div class="rela-block profile-name-container">
                                <div class="rela-block user-name" id="user_name"><?= $profiles['username'] ;?></div>
                                <div class="rela-block user-desc" id="user_description"><?= $profiles['description'] ;?></div>
                            </div>
                            <div class="rela-block profile-card-stats">
                                <div class="text-center profile-stat followers" id="num_followers"><br><?= $profiles['signup_date'] ;?>
                                </div>
                            </div>
                        </div>
                        <div class="rela-block content">
                            <?php foreach ($usergame as $games) {?>

                            <div class="rela-inline image img_game">
                                <img class="img-responsive" src="<?= $this->assetUrl('img/jeux/' . $games['picture']) ?>" alt="<?= $games['picture'] ?>">
                                <div>
                                <p>Pseudo IG : <?= $games['pseudo'] ?></p><br>
                                <p>Plateforme : <?= $games['plateforme'] ?></p><br>
                                <p>Niveau : <?= $games['niveau'] ?></p><br>
                                </div>
                            </div>
                            <?php } ?>
                            <button name="contactUser" class="btn btn-default">Contacter ce joueur</button>

                        </div>
                    </div>


                    <?php } ?>



        <br>

    </div>


<?php $this->stop('main_content') ?>
