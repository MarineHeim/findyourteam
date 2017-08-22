<?php $this->layout('layout', ['title' => 'Messages reçus']); ?>

<?php $this->start('main_content');?>

        <!-- Mini menu messagerie -->
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="<?= $this->url('messagerie_envoi') ?>">Envoyer un message</a></li>
          <li role="presentation"><a href="<?= $this->url('messagerie_recu') ?>">Messages reçus<span class="badge">0</span></a></li>
          <li role="presentation"><a href="">Messages envoyés<span class="badge">0</span></a></li>
        </ul>
        <!-- Fin du mini menu messagerie -->
        <br>
        <br>


<?php $this->stop('main_content'); ?>
