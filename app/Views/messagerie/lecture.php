<?php $this->layout('layout', ['title' => $messagelecture[0]['id']]); ?>

<?php $this->start('main_content');?>

<!-- Lire un message -->
<div class="container">
        <h3><?= $messagelecture['expediteur']; ?></h3>
        <br>
        <p><?= $messagelecture['time']; ?></p>
        <br>
        <p><?= $messagelecture['titre']; ?></p>
        <br>
        <p><?= $messagelecture['text']; ?></p>
</div>
<!-- Fin lire un message -->
<br><br>
<!-- Bouton pour répondre au message -->
<button class="btn btn-default" name="">Répondre à ce message</button>
<!-- Fin du Bouton pour répondre au message -->

<?php $this->stop('main_content'); ?>
