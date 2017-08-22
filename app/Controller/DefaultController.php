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
		if(isset($_POST['contactForm'])) {
		$email = $_POST['mail'];
		$message = $_POST['message'];

		    $mailDestinataire="marine.heim@outlook.com";

			$from = "From: <".$email.">";

			$messageMail = "
		            Formulaire de contact:

		            Email :   ".$email."
					Message :   ".$message."";

			mail($mailDestinataire, $messageMail, $from, $message);

		$this->flash('Votre message a bien été envoyé.', 'success');
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
	public function teams()
	{
		$this->show('default/teams');
	}
	public function players()
	{
		$this->show('default/players');
	}
	public function messagerie()
	{
		$this->show('messagerie/envoi');

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
