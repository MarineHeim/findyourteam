<?php $this->layout('layout', ['title' => $messagelecture[0]['id']]); ?>

<?php $this->start('main_content');?>

<div class="container">
        <h3><?= $messagelecture['expediteur']; ?></h3>
        <br>
        <p><?= $messagelecture['time']; ?></p>
        <br>
        <p><?= $messagelecture['titre']; ?></p>
        <br>
        <p><?= $messagelecture['text']; ?></p>
</div>
<br><br>
<button class="btn btn-default" name="">Répondre à ce message</button>

<?php $this->stop('main_content'); ?>
