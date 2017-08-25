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

            <div class="col-md-2">
            <h4 class="text-center">Expéditeur  </h4>
            <p class="text-center"><?php echo $messagesrecu['expediteur'] ?></p>
            </div>


            <div class="col-md-2">
            <h4 class="text-center">Titre  </h4>
            <p class="text-center"><?php echo $messagesrecu['titre'] ?></p>
            </div>


            <div class="col-md-3">
            <h4 class="text-center">Message  </h4>
            <p class="text-center"><?php echo $messagesrecu['text'] ?></p>
            </div>


            <div class="col-md-3">
            <h4 class="text-center">Reception le  </h4>
            <p class="text-center"><?php echo $messagesrecu['time'] ?></p>
            </a>
            </div>

            <div class="col-md-2">
                <button type="reset"  name="Effacer" class="btn btn-default btn_message">Supprimer ce message</button>
            </div>

            <br>
            <br>
        </div>
    </div>
</div>


        <?php }?>
<?php $this->stop('main_content'); ?>
