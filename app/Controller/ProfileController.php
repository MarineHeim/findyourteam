<?php

namespace Controller;

use \W\Controller\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
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



            $game_manager = new \Model\GameModel();
            // On récupére tout les jeux
            $games = $game_manager->findAllGame();

        $this->show('profile/profile', ['games' => $games]);
    }
}
