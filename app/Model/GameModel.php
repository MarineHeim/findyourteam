<?php

namespace Model;

class GameModel extends \W\Model\Model
{
    /**
     * Récupére toutes les jeux
     */
    public function __construct()
    {
        parent::__construct();
        $this->table = 'games';
    }

    public function findAllGame()
    {
        $query = $this->dbh->query('SELECT `id`, `name`, `description`, `picture` FROM games');
        return $query->fetchAll();
    }
    public function GetGameById($id)
    {
        $query = $this->dbh->query('SELECT id, name, description, picture FROM games
            WHERE id="' . $id . '"');
        return $query->fetchAll();
    }

    public function GetPlayerByGame($game_id, $id_joueur)
    {
        $query = $this->dbh->query('SELECT * FROM games
        INNER JOIN play ON play.id_game = games.id
        INNER JOIN users ON play.id_joueur = users.id
            WHERE games.id = ' . $game_id);
        return $query->fetchAll();
    }
}
