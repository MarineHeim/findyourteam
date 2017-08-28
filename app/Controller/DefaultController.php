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

		function printError ($error, $field) {
	    foreach ($error as $data) {
	         if ( $data['field'] == $field ) {
	             return $data['messageAlert'];
	         }
	    }
	}

	public function contact()
	{
		$email = null;
		$message= null;


		if (!empty($_POST)) {


			$send = true;

	    // Récupération des données de $_POST
	    $email      = ($_POST['mail']);
	    $message   = ($_POST['message']);

	    // Création du tableau d'erreur
	    $error = [];


				if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
					$error['mail'] = 'Vous devez saisir une adresse email valide (user@domain.com).';
			}
				if (empty($message)) {
					$error['message'] = 'Vous devez saisir un message.';
				}


			$mailDestinataire="marine.heim@outlook.com";

			$from = "From: <".$email.">";

			$messageMail = "Formulaire de contact:
											Email :   ".$email."
											Message :   ".$message."";

			mail($mailDestinataire, $messageMail, $from, $message);

						if (empty($error)) {
						$this->showJson(['success'=>'Votre message a bien été envoyé.']);
					}else {
						$this->showJson($error);

					}
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

	public function userListApi()
    {
        $user_manager = new \Model\UserModel();
        $users = $user_manager->search( [ 'username' => $_GET['term'] ] );
        foreach ($users as &$user) {
            $user['url'] = $this->generateUrl('profile_profile_view', ['id' => $user['id']]);
        }
        $this->showJson($users); // Renvoie du json et pas html
    }

}
