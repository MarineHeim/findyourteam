<?php

namespace Controller;

use \W\Controller\Controller;

class MessagerieController extends Controller
{
    public function envoi()
    {
        $destinataires_manager = new \Model\UserModel();
        $messages_manager = new \Model\MessagerieModel();

        $messagesenvoyes = $messages_manager->SeeSendMessage($this->getUser()['username']);

        $messagesrecus = $messages_manager->SeeAllMessage($this->getUser()['username']);

        $destinataires = $destinataires_manager->findAll();

        if (isset($_POST['messageForm'])) {
                $destinataires = $_POST['destinataires'];
                $titre = $_POST['titre'];
                $text = $_POST['text'];
                $message = $messages_manager->insert([
                    'expediteur' => $this->getUser()['username'],
                    'destinataire' => $destinataires,
                    'titre' => $titre,
                    'text' => $text,
                    'time' => (new \DateTime('now'))->format('Y-m-d H:i:s')
                ]);

                $this->flash('Votre message a bien été envoyé.', 'success');
                $this->redirectToRoute('messagerie_envoi');


        }
    	$this->show('messagerie/envoi', ['destinataires' => $destinataires,
                                        'messagesrecus' => $messagesrecus,
                                        'messagesenvoyes' => $messagesenvoyes]);

    }

    public function recu()
    {
        $messages_manager = new \Model\MessagerieModel();

        $messagesenvoyes = $messages_manager->SeeSendMessage($this->getUser()['username']);
        $messagerecu = $messages_manager->findAllMessage();


        $messagesrecus = $messages_manager->SeeAllMessage($this->getUser()['username']);
        $this->show('/messagerie/recu', ['messagesrecus' => $messagesrecus,
                                        'messagesenvoyes' => $messagesenvoyes]);
    }

    public function envoye()
    {
        $messages_manager = new \Model\MessagerieModel();

        $messagesrecus = $messages_manager->SeeAllMessage($this->getUser()['username']);


        $messagesenvoyes = $messages_manager->SeeSendMessage($this->getUser()['username']);

        $this->show('/messagerie/envoye', ['messagesenvoyes' => $messagesenvoyes,
                                          'messagesrecus' => $messagesrecus]);
    }

    public function lecture($id)
    {
        $messages_manager = new \Model\MessagerieModel();

        $messagelecture = $messages_manager->ReadMessage($id);



        $this->show('/messagerie/lecture', ['messagelecture' => $messagelecture]);
    }


   public function delete($id)
   {
       $messages_manager = new \Model\MessagerieModel();
       $user = $this->getUser();
       $messages = $messages_manager->find($id);

           if ($messages_manager->delete($id)) {
               // On enregistre un message en session
               $this->flash('Le message a bien été supprimée.', 'success');
           }

       $this->redirectToRoute('messagerie_recu');
   }
}
