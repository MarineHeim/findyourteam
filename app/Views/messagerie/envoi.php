<?php $this->layout('layout', ['title' => 'Messagerie']); ?>

<?php $this->start('main_content');?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Envoyer des messages</title>
    </head>
    <body>
        <!-- Mini menu messagerie -->
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="">Envoyer un message</a></li>
          <li role="presentation"><a href="">Messages reçus<span class="badge">0</span></a></li>
          <li role="presentation"><a href="">Messages envoyés<span class="badge">0</span></a></li>
        </ul>
        <!-- Fin du mini menu messagerie -->
        <br>
        <br>
        <!-- Formulaire d'envoi d'un mail -->
        <form method="POST">
            <div class="form-group">
                <label for="username">Nom du destinataire:</label>
                <select class="form-control" name="destinataire">
                    <option>---</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" placeholder="Veuillez saisir votre message"></textarea>
            </div>
            <br>
            <br>
            <button name="messageForm" class="btn btn-default">Envoyer</button>
        </form>
        <!-- Fin du formulaire d'envoi d'un mail -->
    </body>
</html>







<?php $this->stop('main_content'); ?>
