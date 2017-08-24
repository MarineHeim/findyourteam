<?php

namespace Model;

class TeamsModel extends \W\Model\Model
{
    public function SeeAllTeams()
    {
        $query = $this->dbh->query('SELECT `avatar`, `team_name`, `nb_players`, `date_creation` FROM teams');
        return $query->fetchAll();
    }
}
