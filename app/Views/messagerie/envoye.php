<?php $this->layout('layout', ['title' => 'Messages envoyés']); ?>

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

    <?php  foreach ($messagesenvoyes as $messagesenvoye) { ?>
    <!-- Présentation du jeu -->
    <div class="messagesenvoyes">
        <h3><?php echo $messagesenvoye['destinataire'] ?></h3>
        <h4><?php echo $messagesenvoye['titre'] ?></h4>
        <p><?php echo $messagesenvoye['text'] ?></p>
        <p><?php echo $messagesenvoye['time'] ?></p>
        <br>
    </div>

    <?php }
    ?>

<?php $this->stop('main_content'); ?>
