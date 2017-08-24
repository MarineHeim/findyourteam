<?php

namespace Controller;

use \W\Controller\Controller;

class TeamsController extends Controller
{
    public function teams()
    {
        
        $this->show('teams/teams');
    }
    public function createTeam()
    {
        $this->show('teams/createteam');
    }
}
