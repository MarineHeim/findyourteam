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

}
