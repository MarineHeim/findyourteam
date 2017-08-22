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
        $query = $this->dbh->query('SELECT id, username, avatar, description, avatar, signup_date FROM users WHERE id="' . $id . '"');
        return $query->fetchAll();
    }
}
