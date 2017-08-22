<?php

namespace Controller;

use \W\Controller\Controller;

class MessagerieController extends Controller
{
    public function envoi()
    {
        $destinataires_manager = new \Model\UserModel();
        $message_manager = new \Model\MessagerieModel();

        $destinataires = $destinataires_manager->findAll();

        if (isset($_POST['messageForm'])) {
                $destinataires = $_POST['destinataires'];
                $titre = $_POST['titre'];
                $text = $_POST['text'];
                $message = $message_manager->insert([
                    'expediteur' => $this->getUser()['username'],
                    'destinataire' => $destinataires,
                    'titre' => $titre,
                    'text' => $text,
                    'time' => (new \DateTime('now'))->format('Y-m-d H:i:s')
                ]);

                $this->flash('Votre message a bien été envoyé.', 'success');
                $this->redirectToRoute('messagerie_envoi');

        }
    	$this->show('messagerie/envoi', ['destinataires' => $destinataires]);

    }

    public function recu()
    {
        $messagesreçus_manager = new \Model\MessagerieModel();
        $messagesrecus = $messagesreçus_manager->SeeAllMessage();
        $this->show('/messagerie/recu', ['messageresrecus' => $messagesrecus]);
    }

}
