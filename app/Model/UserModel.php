<?php

namespace Model;

class UserModel extends \W\Model\UsersModel
{
    /**
     * Méthode qui retourne tous les ID utilisateurs existants en BDD
     */
    public function findAllUserID()
    {
        $query = $this->dbh->query('SELECT id FROM ' . $this->table);
        return $query->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function findAllUser($id)
    {
        $query = $this->dbh->query('SELECT * FROM users WHERE id = \''.$id.'\'');
        return $query->fetchAll();
    }

    public function findAllGameByUser($user)
    {
        $query = $this->dbh->query('SELECT * FROM play
            INNER JOIN users ON users.id = play.id_joueur
            INNER JOIN games ON games.id = play.id_game
            WHERE users.id=' .$user.'');
        return $query->fetchAll();
    }
}
