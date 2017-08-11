<?php $this->layout('layout', ['title' => 'Contactez-nous']); // On hérite du fichier layout.php ?>

<?php $this->start('main_content'); ?>

<h1 class="text-center">Formulaire de contact</h1>
<br>
<br>
<p>N'hésitez pas à nous contacter pour toute demande, nous vous répondrons dans les plus brefs délais.</p>
<br>
    <form method="POST">
        <div class="form-group">
            <label for="mail">Mail:</label>
            <input type="mail" name="mail" id="mail" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <br>
        <br>
        <button class="btn btn-default">Envoyer</button>
    </form>
<?php $this->stop('main_content'); ?>
