<?php

namespace Model;

class GameModel extends \W\Model\Model
{
    /**
     * Récupére toutes les jeux
     */

    public function findAllGame()
    {
        $query = $this->dbh->query('SELECT `id`, `name`, `description`, `picture` FROM games');
        return $query->fetchAll();
    }
    public function GetGameById($id)
    {
        $query = $this->dbh->query('SELECT id, name, description, picture FROM games WHERE id="' . $id . '"');
        return $query->fetchAll();
    }
}
