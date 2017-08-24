<?php $this->layout('layout', ['title' => 'Messagerie']); ?>

<?php $this->start('main_content');?>

        <!-- Mini menu messagerie -->
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="envoi_message"><a href="<?= $this->url('messagerie_envoi') ?>">Envoyer un message</a></li>
          <li role="presentation" class="message_recu"><a href="<?= $this->url('messagerie_recu') ?>">Messages reçus<span class="badge"><?php echo count($messagesrecus) ?></span></a></li>
          <li role="presentation" class="message_envoye"><a href="<?= $this->url('messagerie_envoye') ?>">Messages envoyés<span class="badge"><?php echo count($messagesenvoyes) ?></span></a></li>
        </ul>
        <!-- Fin du mini menu messagerie -->
        <br>
        <br>
        <!-- Formulaire d'envoi d'un mail -->
        <form method="POST">
            <div class="form-group">
                <label for="username">Nom du destinataire:</label>
                <select class="form-control" name="destinataires">
                    <?php foreach ($destinataires as $destinataire) { ?>
                    <option><?php echo $destinataire['username'] ?></option>
                <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label for="titre">Objet:</label>
                <input type="text" name="titre" class="form-control" placeholder="Objet...">
            </div>
            <div class="form-group">
                <label for="text">Message:</label>
                <textarea name="text" id="message" class="form-control" placeholder="Veuillez saisir votre message"></textarea>
            </div>
            <br>
            <br>
            <button name="messageForm" class="btn btn-default">Envoyer</button>
            <?php if (isset($error)) { echo $error; } ?>
        </form>
        <!-- Fin du formulaire d'envoi d'un mail -->







<?php $this->stop('main_content'); ?>
