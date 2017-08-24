<?php $this->layout('layout', ['title' => 'Contactez-nous']); // On hérite du fichier layout.php ?>

<?php $this->start('main_content'); ?>

<!-- <h1 class="text-center">Formulaire de contact</h1>
<br>
<br> -->
<p id="txt-contact" class="text-center">N'hésitez pas à nous contacter pour toute demande, nous vous répondrons dans les plus brefs délais.</p>
<br>
    <!-- Formulaire de contact -->
    <form method="POST">
        <div class="form-group">
            <label class="mail" for="mail">Mail :</label>
            <input type="mail" name="mail" id="mail" class="form-control">
        </div>
        <div class="form-group">
            <label class="message" for="message">Message :</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
          <br>
          <br>
        <center>

          <main class="">
            <div class="button animate">
              <div id="btn-contact" name="contactForm" class="text">Envoyer</div>
            </div>
            <div class="progress-bar"></div>
            <svg x="0px" y="0px"
          	 viewBox="0 0 25 30" style="enable-background:new 0 0 25 30;">
              <path class="check" class="st0" d="M2,19.2C5.9,23.6,9.4,28,9.4,28L23,2"/>
            </svg>
          </main>


          <!-- <button id="btn-contact" name="contactForm" class="btn btn-default">Envoyer</button> -->
        </center>
    </form>
    <!-- Fin du formulaire de contact -->
<?php $this->stop('main_content'); ?>
