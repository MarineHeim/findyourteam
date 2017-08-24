<?php $this->layout('layout', ['title' => 'Créer ta team']) ?>

<?php $this->start('main_content') ?>

        <div class="Avatar">
            <form id="updateavatarteam"method="post" enctype="multipart/form-data">
                <label>Choisis un Avatar pour ta team</label> <br>
                <input class="btn btn-default" type="file" name="avatar" id="avatarteam" value=""> <br>
                <button class="btn btn-default" name="updateavatarteam" id="updateavatarteam">Ajouter l'avatar</button>
            </form>
        </div>
        <br><br>
        <div class="TeamName">
            <label for="TeamName">Nom de la Team :</label>
            <input type="text" class="form-control formcontrol_team" id="TeamName" name="TeamName">
        </div>
        <br>

        <div class="">
            <form id="updatedescriptionteam" method="post">
                <label>Description de votre team:</label>
            <textarea class="form-control formcontrol_team" rows="8" cols="100" name="description" id="descriptionteam"></textarea><br>
            </form>
        </div>


        <form id="updateteam" method="post">
            <div>
                <label>Votre jeu :</label>
                <select class="form-control formcontrol_team" name="jeux" id="jeux">
                    <?php  foreach ($games as $game) { ?>
                    <option value="<?php echo $game['id'] ?>"><?php echo $game['name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <br>

            <div>
                <label>Plateforme :</label>
                <select class="form-control formcontrol_team" name="plateforme" id="plateforme">
                  <option>---</option>
                  <option>PC</option>
                  <option>PS3</option>
                  <option>PS4</option>
                  <option>XBOX 360</option>
                  <option>XBOX ONE</option>
                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="username">Sélectionnes tes coéquipiers:</label>
                <select class="form-control formcontrol_team" name="destinataires">
                    <?php foreach ($destinataires as $destinataire) { ?>
                    <option><?php echo $destinataire['username'] ?></option>
                <?php } ?>

                </select>
            </div>
            <br>
            <center>
            <button class="btn btn-default updatecreateteam" id="updatecreateteam" name="updatecreateteam">Créer cette équipe</button>
            </center>
        </form>




<?php $this->stop('main_content') ?>
