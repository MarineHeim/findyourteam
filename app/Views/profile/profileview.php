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
        </div>
        <div class="col-md-4">
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                    <img class="media-object" src="..." alt="...">
                    </a>
                </div>  
                <div class="media-body">
                <h4 class="media-heading">Middle aligned media</h4>
                    ...
                </div>
            </div>
        </div>
    </div>



    <?php } ?>
<?php $this->stop('main_content') ?>
