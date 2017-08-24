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
        $query = $this->dbh->prepare("INSERT INTO play (id_joueur, id_game, plateforme, niveau, pseudo)
        VALUES (:id_joueur, :id_game, :plateforme, :niveau, :pseudo)");
        $query->bindValue(':id_joueur', $gameplay['id_joueur']);
        $query->bindValue(':id_game', $gameplay['id_game']);
        $query->bindValue(':plateforme', $gameplay['plateforme']);
        $query->bindValue(':niveau', $gameplay['niveau']);
        $query->bindValue(':pseudo', $gameplay['pseudo']);
        $query->execute();

        return $this->lastInsertId();
    }
}
