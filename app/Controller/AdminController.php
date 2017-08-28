<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{
    public function gamescreate(){
        $this->allowTo(['admin']);

        $game_manager = new \Model\GameModel();
        // On récupére tout les jeux
        $games = $game_manager->findAllGame();

            $errors = [];
            $name = null;
            $description = null;
            $picture = null;



            if (isset($_POST['creategame'])) { // Vérifie que le formulaire updateprofile est posté
                $name = $_POST['name'];
                $description = $_POST['description'];
                $picture = $_FILES['picture'];

                $admin_manager = new \Model\AdminModel();

                if (empty($errors)) {

                    // On ajoute un jeu
                    $addjeuxbdd = $admin_manager->addGames([
                        'name' => $name,
                        'description' => $description,
                        'picture' => $picture['name'],
                    ]);
                    if (isset($_FILES['picture'])) {
                        $file = pathinfo($_FILES['picture']['name']); // pathinfo retourne un tableau ['filename' => 'image', 'extension' => 'png']
                        // Vérifier que l'extension du fichier est png, pdf, gif, jpg ou jpeg
                        $allowed_extensions = ['application/pdf', 'image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
                        $size = $_FILES['picture']['size'] / 2048 / 2048; // Convertis la taille du fichier en MégaOctets
                        if (in_array($_FILES['picture']['type'], $allowed_extensions) && $size <= 1) {
                            move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . '/../../public/assets/img/jeux/' . $file['filename']. '.' . $file['extension']); // Déplace le fichier dans public/uploads/IMAGE.JPG
                            $game_manager = new \Model\GameModel();
                            $picture = $file['filename'] .'.' . $file['extension'];
                            // On met à jour l'avatar de l'utilisateur en base de données
                            $game_manager->update(['picture' => $picture], $addjeuxbdd);

                        } else {
                            $this->flash('Le format du fichier ou sa taille ne sont pas correct. Maximum 2Mo', 'danger');
                        }
                    }
                }


            }
        $this->show('/admin/gamescreate', ['games' => $games]);
    }


    public function gamesdelete($id)
      {
          $admin_manager = new \Model\AdminModel();
          $user = $this->getUser();
          $jeux = $admin_manager->find($id);

              if ($admin_manager->delete($id)) {
                  // On enregistre un message en session
                  $this->flash('Le jeu a bien été supprimée.', 'success');
              }

          $this->redirectToRoute('admin_gamescreate');
      }
}
