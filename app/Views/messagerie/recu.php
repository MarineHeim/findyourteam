<?php $this->layout('layout', ['title' => 'Messages reçus']); ?>

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
        <?php  foreach ($messagesrecus as $messagesrecu) { ?>
        <!-- Présentation du jeu -->
        <div class="messagesrecus">
            <a href="<?= $this->url('messagerie_lecture', ['id' => $messagesrecu['id']]); ?>">
            <h3><?php echo $messagesrecu['expediteur'] ?></h3>
            <h4><?php echo $messagesrecu['titre'] ?></h4>
            <p><?php echo $messagesrecu['text'] ?></p>
            <p><?php echo $messagesrecu['time'] ?></p>
            </a>
            <br>
            <input type="reset" name="Effacer" value="Supprimer ce message" />
        </div>

        <?php }
        ?>
<?php $this->stop('main_content'); ?>
