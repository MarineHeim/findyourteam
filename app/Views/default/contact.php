<?php $this->layout('layout', ['title' => 'Contactez-nous']); // On hérite du fichier layout.php ?>

<?php $this->start('main_content'); ?>

<!-- Paragraphe -->
<p id="txt-contact" class="text-center">N'hésitez pas à nous contacter pour toute demande, nous vous répondrons dans les plus brefs délais.</p>
<!-- Fin du paragraphe -->
<br>
    <!-- Formulaire de contact -->
    <form id="form" method="POST">
        <div class="form-group">
          <!-- Case Votre email -->
            <label class="mail" for="mail">Votre email :</label>
            <input type="mail" name="mail" id="mail" class="form-control" placeholder="monemail@maboitemail.com">
            <div class="alert alert-danger" role="alert" id="errorEmail" style="display:none"></div>
            <!-- Fin case Votre email -->
        </div>
        <div class="form-group">
          <!-- Case message  -->
            <label class="message" for="message">Message :</label>
            <textarea name="message" id="message" class="form-control"  placeholder="Mon message..."></textarea>
            <div class="alert alert-danger" role="alert" id="errorMessage" style="display:none"></div>
            <!-- Fin case message  -->
        </div>
          <br>
          <br>
        <div class="text-center" >
          <!-- Bouton JS -->
          <main>
            <div name="contactForm" class="button animate">
              <div   class="text-envoyer">Envoyer</div>
            </div>
            <div class="progress-bar"></div>
            <svg x="0px" y="0px"
          	 viewBox="0 0 25 30" style="enable-background:new 0 0 25 30;">
              <path class="check" class="st0" d="M2,19.2C5.9,23.6,9.4,28,9.4,28L23,2"/>
            </svg>
          </main>
          <div class="alert alert-success" role="alert" id="successMessage" style="display:none"></div>
        </div>
        <!-- Fin du bouton JS -->
    </form>
    <!-- Fin du formulaire de contact -->
<?php $this->stop('main_content'); ?>
