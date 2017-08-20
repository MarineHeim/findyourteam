<?php

namespace Model;

class ProfileModel extends \W\Model\Model
{
    public function findProfileUser()
    {
        $query = $this->dbh->query(
            'SELECT * FROM users
            INNER JOIN play ON users.id = play.id_joueur
            INNER JOIN '
        );
        return $query->fetchAll();
    }
    public function findProfileGame()
    {
        $query = $this->dbh->query('SELECT * FROM games INNER JOIN play ON games.id = play.id_game');
        return $query->fetchAll();
    }
    public function addInfo()
    {
        $query = $this->dbh->query('SELECT * FROM users');
        return $query->fetchAll();
    }
    public function addgameplay($gameplay)
    {
        $gameplay['jeux'];
        $gameplay['pseudo'];
        $query = $this->dbh->query('INSERT INTO `play`(`id_joueur`, `id_game`) VALUES ,[value-2])');
        return $query->fetchAll();
    }
}
