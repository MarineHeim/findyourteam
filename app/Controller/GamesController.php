<?php

namespace Controller;

use \W\Controller\Controller;

class GamesController extends Controller
{

    /**
     * Page qui liste les jeux
     */
    public function allgames()
    {
        $game_manager = new \Model\GameModel();
        // On récupére tout les jeux
        $games = $game_manager->findAllGame();

        /*foreach($activities as $key => $value) {
            $activities[$key]['user'] = $user_manager->find($activities[$key]['user_id']);
        }*/

        // On passe la variable $games dans la vue
        $this->show('/games/allgames', ['games' => $games]);
    }

    public function onegame($id)
    {
        $game_manager = new \Model\GameModel();
        $onegame = $game_manager->GetGameById($id);
        $this->show('/games/onegame', ['onegame' => $onegame]);
    }
}
