<?php
/*
1. Créer la vue avec le formulaire d'inscription d'un utilisateur
Login, email, mot de passe, confirmer le mot de passe
2. Dans le controller, vérifier que :
- Le login ou l'email ne doivent pas déjà exister en base de données (Voir les méthodes Documentation http://localhost/POO4/SocialNetwork/docs/tuto/?p=modeles)
- Le login, l'email et mot de passe doit faire au moins 4 caractères
- Le mot de passe et confirmer mot de passe doivent être identique
3. Si toutes ces conditions sont remplies, on utilise le UserModel pour insérer l'utilisateur en base de données et on oublie pas de hasher le mot de passer.
->insert([
    'email' => $_POST['email'],
    'role' => 'user'
])
*/
$this->layout('layout', ['title' => 'Inscription / Connexion']); ?>

<?php $this->start('main_content'); ?>

  <div>
    <!-- Formulaire de Connexion -->
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="" method="post" role="form" style="display: block;">
                <h2 class="title-register">CONNEXION</h2>
                <div class="form-group <?php echo isset($errors['email']) ? 'has-error' : ''; ?>">
                  <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Adresse email">
                  <span class="help-block"><?php echo isset($errors['email']) ? 'has-error' : ''; ?></span>

                </div>
                  <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : ''; ?>">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                    <span class="help-block"><?php echo isset($errors['password']) ? 'has-error' : ''; ?></span>

                  </div>
                  <div class="col-xs-6 form-group pull-right">
                        <button name="loginForm" id="loginForm" tabindex="4" class="form-control btn btn-login">Connexion</button>
                  </div>
              </form>
              <!-- Fin du formulaire de connexion -->

              <!-- Formulaire d'inscription -->
              <form id="register-form" action="" method="post" role="form" style="display: none;">
                <h2 class="title-register" >S'ENREGISTRER</h2>
                  <div class="form-group <?php echo isset($errors['login']) ? 'has-error' : ''; ?>">
                    <input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="">
                    <span class="help-block"><?php echo isset($errors['login']) ? 'has-error' : ''; ?></span>
                  </div>
                  <div class="form-group <?php echo isset($errors['email']) ? 'has-error' : ''; ?>">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Adresse email" value="">
                    <span class="help-block"><?php echo isset($errors['email']) ? 'has-error' : ''; ?></span>
                  </div>
                  <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : ''; ?>">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                    <span class="help-block"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
                  </div>
                  <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : ''; ?>">
                    <input type="password" name="cf-password" id="cf-password" tabindex="2" class="form-control" placeholder="Confirmer le mot de passe">
                    <span class="help-block"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <button name="registerForm" id="registerForm" tabindex="4" class="form-control btn btn-register" value="S'enregistrer">S'enregistrer</button>
                      </div>
                    </div>
                  </div>
              </form>
              <!-- Fin du formulaire d'inscription -->
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <!-- Bouton de connexion -->
              <a href="#" class="active" id="login-form-link"><div class="login">CONNEXION</div></a>
              <!-- Fin du bouton de connexion -->
            </div>
            <div class="col-xs-6 tabs">
              <!-- Bouton d'inscription -->
              <a href="#" id="register-form-link"><div class="register">S'ENREGISTRER</div></a>
              <!-- Fin du bouton d'inscription -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<?php $this->stop('main_content'); ?>
