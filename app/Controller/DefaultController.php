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
		$email = null;
		$message= null;
		if(isset($_POST['contactForm'])) {
		$email = $_POST['mail'];
		$message = $_POST['message'];

		$send = true;

		if (empty($email)) {
		$send = false;
		setFlashbag("Attention", "Veuillez renseigner une adresse email.");
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		setFlashbag("Attention", "Veuillez renseigner une adresse email valide.");

	}
		 }
		  $mailDestinataire="poulainmaud@gmail.com";

			$from = "From: <".$email.">";

			$messageMail = "Formulaire de contact:
		      						Email :   ".$email."
											Message :   ".$message."";

			mail($mailDestinataire, $messageMail, $from, $message);

						if (!empty($_POST)) {
						$this->showJson(['success'=>'Votre message a bien été envoyé.']);
						}

		$this->show('default/contact');
	}
	public function inscription()
	{
		$this->show('default/inscription');
	}
	public function jeux()
	{
		$this->show('default/jeux');
	}
	public function players()
	{
		$this->show('default/players');
	}


	public function userListApi()
    {
        $user_manager = new \Model\UserModel();
        $users = $user_manager->search( [ 'username' => $_GET['term'] ] );
        foreach ($users as &$user) {
            $user['url'] = $this->generateUrl('default_profile_view', ['username' => $user['username']]);
        }
        $this->showJson($users); // Renvoie du json et pas html
    }

}
