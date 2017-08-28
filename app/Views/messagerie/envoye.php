<?php $this->layout('layout', ['title' => 'Messages envoyés']); ?>

<?php $this->start('main_content');?>

    <!-- Mini menu messagerie -->
    <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="envoi_message btn_messagerie"><a href="<?= $this->url('messagerie_envoi') ?>">Envoyer un message</a></li>
        <li role="presentation" class="message_recu btn_messagerie"><a href="<?= $this->url('messagerie_recu') ?>">Messages reçus<span class="badge"><?php echo count($messagesrecus) ?></span></a></li>
        <li role="presentation" class="message_envoye btn_messagerie"><a href="<?= $this->url('messagerie_envoye') ?>">Messages envoyés<span class="badge"><?php echo count($messagesenvoyes) ?></span></a></li>
    </ul>
    <!-- Fin du mini menu messagerie -->
    <br>
    <br>

    <?php  foreach ($messagesenvoyes as $messagesenvoye) { ?>
    <!-- Boite d'envoi -->
    <div class=" boite_reception">
        <div class="row">
            <div class="messagesrecus">
                <a href="<?= $this->url('messagerie_lecture', ['id' => $messagesenvoye['id']]); ?>">

                <div class="col-md-3">
                <h4 class="text-center">Destinataire  </h4>
                <p class="text-center"><?php echo $messagesenvoye['destinataire'] ?></p>
                </div>


                <div class="col-md-3">
                <h4 class="text-center">Titre  </h4>
                <p class="text-center"><?php echo $messagesenvoye['titre'] ?></p>
                </div>


                <div class="col-md-3">
                <h4 class="text-center">Message  </h4>
                <p class="text-center"><?php echo $messagesenvoye['text'] ?></p>
                </div>


                <div class="col-md-3">
                <h4 class="text-center">Envoyé le  </h4>
                <p class="text-center"><?php echo $messagesenvoye['time'] ?></p>
                </a>
                </div>

                <br>
                <br>
            </div>
        </div>
    </div>
    <!-- Fin de la Boite d'envoi' -->
    <?php }
    ?>

<?php $this->stop('main_content'); ?>
