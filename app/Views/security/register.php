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
$this->layout('layout', ['title' => 'Inscription']); ?>

<?php $this->start('main_content'); ?>
    <div class="row">
        <h1 class="text-center">Formulaire d'inscription</h1>
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                <div class="form-group <?php echo isset($errors['login']) ? 'has-error' : ''; ?>">
                    <label class="control-label" for="login">Login:</label>
                    <input type="text" name="login" id="login" class="form-control" value="<?php echo $login; ?>">
                    <span class="help-block"><?php echo isset($errors['login']) ? $errors['login'] : ''; ?></span>
                </div>
                <div class="form-group <?php echo isset($errors['email']) ? 'has-error' : ''; ?>">
                    <label class="control-label" for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                    <span class="help-block"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>
                </div>
                <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : ''; ?>">
                    <label class="control-label" for="password">Mot de passe:</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="help-block"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
                </div>
                <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : ''; ?>">
                    <label class="control-label" for="cf-password">Confirmer le mot de passe:</label>
                    <input type="password" name="cf-password" id="cf-password" class="form-control">
                    <span class="help-block"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
                </div>
                <button class="btn btn-primary" name="registerForm">Je m'inscris !</button>
            </form>
        </div>
    </div>
<?php $this->stop('main_content'); ?>
