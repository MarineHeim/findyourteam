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
        $id_game = $gameplay['jeux'];
        $id_joueur = $gameplay['pseudo'];
        $niveau = $gameplay['niveau'];
        $plateforme = $gameplay['plateforme'];

        $query = $this->dbh->prepare("INSERT INTO play (id_joueur, id_game, niveau, plateforme)
        VALUES (:id_joueur, :id_game, :niveau, :plateforme)");
        $query->bindParam(':id_joueur', $id_joueur);
        $query->bindParam(':id_game', $id_game);
        $query->bindParam(':niveau', $niveau);
        $query->bindParam(':plateforme', $plateforme);
        $query->execute();

        return $query;
    }
}
