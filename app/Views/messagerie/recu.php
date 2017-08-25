<?php $this->layout('layout', ['title' => 'Messages reçus']); ?>

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
        <?php  foreach ($messagesrecus as $messagesrecu) { ?>
<div class="container boite_reception">
    <div class="row">
        <div class="messagesrecus">
            <a href="<?= $this->url('messagerie_lecture', ['id' => $messagesrecu['id']]); ?>">
            <div class="col-md-3">
            <h3><?php echo $messagesrecu['expediteur'] ?></h3>
            </div>
            <div class="col-md-3">
            <h4><?php echo $messagesrecu['titre'] ?></h4>
            </div>
            <div class="col-md-3">
            <p><?php echo $messagesrecu['text'] ?></p>
            </div>
            <div class="col-md-3">
            <p><?php echo $messagesrecu['time'] ?></p>
            </a>
            </div>
            <br>
            <br>
            </div>
            </div>
            <input type="reset" name="Effacer" value="Supprimer ce message" />
        </div>
        <br><br><br><br><br><br><br><br><br>
</div>
        <?php }
        ?>
<?php $this->stop('main_content'); ?>
