<?php $this->layout('layout', ['title' => $oneprofile['id']]); ?>

<?php $this->start('main_content') ?>

<div class="navigation">
    <a href="<?= $this->url('profile_profile') ?>"><button class="btn  modifier_profil <?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>" type="button" name="modifier_profil">Modifier profil</button></a>
    <a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>"><button class="btn btn-default voir_profil <?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>" type="button" name="modifier_profil">Voir profil</button></a>
</div>

<br><br>

                <?php  foreach ($oneprofile as $profiles) { ?>
                  <h1 class="animated shake text-center"> Profil de <?php echo $profiles['username'] ?> </h1>
                <div class="row partie1_profil">
                    <div class="col-md-12 col-xs-12" align="center">
                    <div class="outter">    <img class="img-responsive photo_profil image-circle" src="<?= $this->assetUrl('img/avatars/' . $profiles['avatar']) ?>" alt="..."></div>
                    </div>
                </div>
                  <div class="row partie2_profil">
                    <div class="col-md-12 col-xs-12 " align="center">
                      <h3 text-align="center"><?php echo $profiles['username'] ?></h3>
                      <p text-align="center">Date d'inscription :</p>
                      <p><?php echo $profiles['signup_date'] ?></p>
                    </div>
                  </div>
                <div class="row ">
                    <div class="col-md-12 col-xs-12 partie3_profil ">
                        <h3>Description :</h3>
                        <p><?php echo $profiles['description'] ?></p>
                    </div>
                    <div class="col-md-12 col-xs-12 partie4_profil ">
                        <?php foreach ($usergame as $usergames) { ?>
                        <div class="usergame">
                          <h3>Les jeux préférés de <?php echo $profiles['username'] ?> :</h3>
                                <h4>Jeux : <?php echo $usergames['name'] ?></h4>
                                <h4>Niveau : <?php echo $usergames['niveau'] ?></h4>
                                <h4>Plateforme : <?php echo $usergames['plateforme'] ?></h4>
                                <h4>Pseudo IG : <?php echo $usergames['pseudo'] ?></h4>
                        </div>
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


<!-- <div class="container">
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>12 : 30 AM</h3></div>
            <div class="outter"><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle"/></div>
            <h1>Hi Guest</h1>
            <span>INDIAN</span>
	    </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                 125651 <br/> <span>FOLLOWERS</span>
            </h3>
        </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                 125651 <br/> <span>FOLLOWERS</span>
            </h3>
        </div>

        <div class="col-md-12 col-xs-12 login_control">

                <div class="control">
                    <div class="label">Email Address</div>
                    <input type="text" class="form-control" value="admin@gmail.com"/>
                </div>

                <div class="control">
                     <div class="label">Password</div>
                    <input type="password" class="form-control" value="123456"/>
                </div>
                <div align="center">
                     <button class="btn btn-orange">LOGIN</button>
                </div>

        </div>



    </div>
</div> -->
