<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class SoccerController extends Controller
{

    /**
     * This is the action method will return the list of Teams  and first team players
     * [listTeam description]
     * @return [type] [description]
     */
    public function listTeam(){
        $teams=Team::all();
        $teamId=$teams->first()->id;
        $selectedTeam=Team::find($teamId);
        $players=$selectedTeam->players;
        return view('soccer.soccer', compact('teams','players','selectedTeam'));
    }
    

    /**
     * This is an action method which will be called on teh ajax request to provide list of players for a provided team_id
     * [playerList description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public  function playerList(Request $request){
        if($request->has('team_id') && $request->ajax()){
            $selectedTeam=Team::find($request->team_id);
            $players=Team::find($request->team_id)->players;
            return view('soccer.player', compact('players','selectedTeam'));
        }
    }
}
