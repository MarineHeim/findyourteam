<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function contact()
	{
		$this->show('default/contact');
	}

	public function profile()
	{
	        $errors = [];
	        $jeux = null;
	        $console = null;
	        $pseudo = null;
	        if (isset($_POST['updateprofile'])) { // Vérifie que le formulaire registerForm est posté
	            $jeux = $_POST['jeux'];
	            $console = $_POST['console'];
	            $pseudo = $_POST['pseudo'];
	            $user_manager = new \Model\ProfileModel();

	            if (strlen($pseudo) < 3) {
	                $errors['pseudo'] = 'Le pseudo est trop court.';
	            }

				if (strlen($pseudo) > 30) {
					$errors['pseudo'] = 'Le pseudo est trop long.';
				}

	            if (empty($errors)) {

	                // On inscrit l'utilisateur
	                $gameplay = $user_manager->addgameplay([
	                    'jeux' => $jeux,
	                    'pseudo' => $pseudo
	                ]);
	            }
	        }
		$this->show('default/profile');
	}
	public function inscription()
	{
		$this->show('default/inscription');
	}
	public function jeux()
	{
		$this->show('default/jeux');
	}
	public function team()
	{
		$this->show('default/team');
	}
	public function messagerie()
	{
		$this->show('default/messagerie');
	}

}
