<?php

namespace Model;

class MessagerieModel extends \W\Model\Model
{
    public function SeeAllMessage($username)
    {
        $query = $this->dbh->query('SELECT * FROM messagerie WHERE destinataire = \''.$username.'\' ORDER BY messagerie.time DESC');
        return $query->fetchAll();
    }
    public function SeeSendMessage($username)
    {
        $query = $this->dbh->query('SELECT * FROM messagerie WHERE expediteur = \''.$username.'\' ORDER BY messagerie.time DESC');
        return $query->fetchAll();
    }
    public function ReadMessage($id)
    {
        $query = $this->dbh->query('SELECT * FROM messagerie WHERE id = \''.$id.'\'');
        return $query->fetch();
    }

    public function findAllMessage() {
        $query = $this->dbh->query('SELECT * FROM messagerie');
        return $query->fetchAll();
    }
}
