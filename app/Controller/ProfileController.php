<?php

namespace Controller;

use \W\Controller\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = $this->getUser(); // Récupére l'utilisateur connecté
            $errors = [];
            $id_game = null;
            $id_joueur = null;
            $plateforme = null;
            $niveau = null;
            $pseudo = null;

            if (isset($_POST['updateprofile'])) { // Vérifie que le formulaire updateprofile est posté
                $id_game = $_POST['jeux'];
                $id_joueur = $user['id'];
                $plateforme = $_POST['plateforme'];
                $niveau = $_POST['niveau'];
                $pseudo = $_POST['pseudo'];
                $user_manager = new \Model\ProfileModel();

                /*if (strlen($id_joueur) < 3) {
                    $errors['pseudo'] = 'Le pseudo est trop court.';
                }*/

                /*if (strlen($id_joueur) > 30) {
                    $errors['pseudo'] = 'Le pseudo est trop long.';
                }*/

                if (empty($errors)) {

                    // On ajoute un jeu
                    $gameplay = $user_manager->addgameplay([
                        'id_game' => $id_game,
                        'id_joueur' => $id_joueur,
                        'niveau' => $niveau,
                        'plateforme' => $plateforme,
                        'pseudo' => $pseudo
                    ]);
                }
            }


            $description = null;
            if (isset($_POST['updatedescription'])) {
                $description = $_POST['description'];
                $user_manager = new \Model\UserModel();
                $user = $this->getUser();
                $desc = $user_manager->update(['description' => $description], $user['id']);
            }


            if ($user) {
                // Upload de l'avatar
                if (isset($_POST['updateavatar'])) {
                    $file = pathinfo($_FILES['avatar']['name']); // pathinfo retourne un tableau ['filename' => 'image', 'extension' => 'png']
                    // Vérifier que l'extension du fichier est png, pdf, gif, jpg ou jpeg
                    $allowed_extensions = ['application/pdf', 'image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
                    $size = $_FILES['avatar']['size'] / 2048 / 2048; // Convertis la taille du fichier en MégaOctets
                    if (in_array($_FILES['avatar']['type'], $allowed_extensions) && $size <= 1) {
                        move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/../../public/assets/img/avatars/'. $file['filename'] .'.' . $file['extension']); // Déplace le fichier dans public/uploads/IMAGE.JPG
                        $user_manager = new \Model\UserModel();
                        $avatar = $file['filename'] .'.' . $file['extension'];
                        // On met à jour l'avatar de l'utilisateur en base de données
                        $user_manager->update(['avatar' => $avatar], $user['id']);
                    } else {
                        $this->flash('Le format du fichier ou sa taille ne sont pas correct. Maximum 2Mo', 'danger');
                    }
                }
            }



            $game_manager = new \Model\GameModel();
            // On récupére tout les jeux
            $games = $game_manager->findAllGame();


        $this->show('profile/profile', ['user' => $user, 'games' => $games]);
    }

    public function profileView($id){

        $usergame_manager = new \Model\UserModel();
        $user = $this->getUser(); // Récupére l'utilisateur connecté
        if ($user['id'] != $id) {
            $user = $usergame_manager->find($id);
        }

        $usergame = $usergame_manager->findAllGameByUser($user['id']); // Récupére les jeux de l'utilisateur

        $user_manager = new \Model\UserModel();
        $oneprofile = $user_manager->findAllUser($user['id']);


        if(isset($_POST['sendmailuser'])){
                $messages_manager = new \Model\MessagerieModel();
                $destinataires = $user['username'];
                $titre = $_POST['sujet'];
                $text = $_POST['text'];
                $message = $messages_manager->insert([
                    'expediteur' => $this->getUser()['username'],
                    'destinataire' => $destinataires,
                    'titre' => $titre,
                    'text' => $text,
                    'time' => (new \DateTime('now'))->format('Y-m-d H:i:s')
                ]);

                $this->flash('Votre message a été envoyé.', 'success');
            }

        $this->show('/profile/profileview', ['user' => $user, 'oneprofile' => $oneprofile, 'usergame' => $usergame]);
    }
}
