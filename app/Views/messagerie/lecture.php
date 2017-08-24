<?php $this->layout('layout', ['title' => $messagelecture[0]['id']]); ?>

<?php $this->start('main_content');?>

<?= $messagelecture['text']; ?>

<?php $this->stop('main_content'); ?>
