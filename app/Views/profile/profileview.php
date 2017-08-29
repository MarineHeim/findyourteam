<?php $this->layout('layout', ['title' => $oneprofile['id']]); ?>

<?php $this->start('main_content') ?>

<div class="navigation">


                <?php  foreach ($oneprofile as $profiles) {;?>
                  <!-- Profil des joueurs -->
                    <div class="rela-block" style="margin-top:130px;">
                        <div class="rela-block profile-card">
                                <!-- Photo du joueur -->
                                <img class="profile-pic" src="<?= $this->assetUrl('img/avatars/' . $profiles['avatar']) ?>" alt="<?= $profiles['avatar'] ?>">
                                <!-- Fin photo du joueur -->
                            <div class="rela-block profile-name-container">
                                <!-- Pseudo -->
                                <div class="rela-block user-name" id="user_name"><?= $profiles['username'] ;?></div>
                                <div class="rela-block user-desc" id="user_description"><?= $profiles['description'] ;?></div>
                                <!-- Fin pseudo -->
                            </div>
                            <div class="rela-block profile-card-stats">
                                <!-- Date d'inscription -->
                                <div class="text-center profile-stat followers" id="num_followers"><br><?= $profiles['signup_date'] ;?>
                                <!-- Fin date d'inscription -->
                                </div>
                            </div>
                        </div>
                        <div class="rela-block content">
                            <?php foreach ($usergame as $games) {?>

                            <div class="rela-inline image img_game">
                              <!-- Jeux auwquels joue l'internaute -->
                                <img class="img-responsive" src="<?= $this->assetUrl('img/jeux/' . $games['picture']) ?>" alt="<?= $games['picture'] ?>">
                                <div>
                                <p>Pseudo IG : <?= $games['pseudo'] ?></p><br>
                                <p>Plateforme : <?= $games['plateforme'] ?></p><br>
                                <p>Niveau : <?= $games['niveau'] ?></p><br>
                                </div>
                            </div>
                            <!-- Fin jeux auwquels joue l'internaute -->
                            <?php } ?>
                            <!-- Bouton "contacter ce joueur" -->


                            <button type="button" class="btn btn-default contactUser" data-toggle="modal" data-target="#myModal">
                              Contacter ce joueur
                            </button>

                              <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Contacter ce joueur</h4>
                                        </div>
                                        <div class="modal-body">
                                          <?php require 'contactuser.php' ?>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin du bouton "contacter ce joueur" -->

                        </div>
                    </div>
                    <br>
                    <!-- Fin du profil des joueurs -->


                    <?php } ?>
<?php $this->stop('main_content') ?>
