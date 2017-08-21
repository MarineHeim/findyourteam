<?php $this->layout('layout', ['title' => 'Contactez-nous']); // On hérite du fichier layout.php ?>

<?php $this->start('main_content'); ?>


<p>N'hésitez pas à nous contacter pour toute demande, nous vous répondrons dans les plus brefs délais.</p>
<br>
    <!-- Formulaire de contact -->
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
        <button name="contactForm" class="btn btn-default">Envoyer</button>
    </form>
    <!-- Fin du formulaire de contact -->
<?php $this->stop('main_content'); ?>
