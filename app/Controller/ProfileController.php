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
            $plateforme = null;
            $id_joueur = null;
            $niveau = null;
            if (isset($_POST['updateprofile'])) { // Vérifie que le formulaire updateprofile est posté
                $id_game = $_POST['jeux'];
                $plateforme = $_POST['plateforme'];
                $id_joueur = $_POST['pseudo'];
                $niveau = $_POST['niveau'];
                $user_manager = new \Model\ProfileModel();

                if (strlen($id_joueur) < 3) {
                    $errors['pseudo'] = 'Le pseudo est trop court.';
                }

                if (strlen($id_joueur) > 30) {
                    $errors['pseudo'] = 'Le pseudo est trop long.';
                }

                if (empty($errors)) {

                    // On ajoute un jeu
                    $gameplay = $user_manager->addgameplay([
                        'jeux' => $id_game,
                        'pseudo' => $id_joueur,
                        'niveau' => $niveau,
                        'plateforme' => $plateforme
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

    public function profileView($username){
        $user = $this->getUser(); // Récupére l'utilisateur connecté
        $user_manager = new \Model\UserModel();
        $oneprofile = $user_manager->findAllUser($user['id']);
        $this->show('/profile/profileview', ['user' => $user, 'oneprofile' => $oneprofile]);
    }
}
