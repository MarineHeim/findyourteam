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

    // public function delete($messagerie) {
    //     $query = $this->dbh->prepare('DELETE FROM messagerie (id, expediteur, destinataire, titre, text, time, lu)
    //     VALUES (:id, :expediteur, :destinataire, :titre, :text, :time, :lu)');
    //     $query->bindValue(':id', $messagerie['id']);
    //     $query->bindValue(':expediteur', $messagerie['expediteur']);
    //     $query->bindValue(':destinataire', $messagerie['destinataire']);
    //     $query->bindValue(':text', $messagerie['text']);
    //     $query->bindValue(':time', $messagerie['time']);
    //     $query->bindValue(':lu', $messagerie['lu']);
    //     $query->execute();
    //     return $query->execute;
    // }
}
