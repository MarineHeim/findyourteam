<?php $this->layout('layout', ['title' => $oneprofile['id'] ]); ?>

<?php $this->start('main_content') ?>

    <div class="navigation">
        <ul>
            <li class="<?= ($w_current_route === 'profile_profile') ? 'active' : ''; ?>"><a href="<?= $this->url('profile_profile') ?>">Modifier Profil</a></li>
            <li class="<?= ($w_current_route === 'profile_profileview') ? 'active' : ''; ?>"><a href="<?= $this->url('profile_profile_view', ['id' => $user['id']]) ?>">Voir Profile</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?php  foreach ($oneprofile as $profiles) { ?>
            <div class="oneprofile">
                <h3>Pseudo : <?php echo $profiles['username'] ?></h3>
                <br>
                <br>
                <h3>Avatar :</h3>
                <img class="img-responsive" src="<?= $this->assetUrl('img/avatars/' . $profiles['avatar']) ?>" alt="...">
                <br>
                <h3>Description :</h3>
                <p><?php echo $profiles['description'] ?></p>
                <br>
                <h3>Date d'inscription :</h3>
                <p><?php echo $profiles['signup_date'] ?></p>
            </div>
                <?php } ?>
        </div>


        <div class="col-md-4">
            <?php foreach ($usergame as $usergames) { ?>
            <div class="usergame">
                    <h4>Jeux : <?php echo $usergames['name'] ?></h4>
                    <h4>Niveau : <?php echo $usergames['niveau'] ?></h4>
                    <h4>Plateforme : <?php echo $usergames['plateforme'] ?></h4>
                    <h4>Pseudo IG : <?php echo $usergames['pseudo'] ?></h4>
            </div>

            <br>

            <?php } ?>
        </div>

        <br>

    </div>


<?php $this->stop('main_content') ?>
