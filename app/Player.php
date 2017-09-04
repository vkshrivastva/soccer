<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable=[
      'first_name',
      'last_name',
      'image_uri',
      'team_id'
    ];
    /**
     * This method will return all the players for the teamId
     * @param type $teamId
     * @return type
     */
    public function ScopePlayerList($teamId){
      // echo 'I am here';exit;
        return $this->where('team_id',$teamId);
    }
    
 /**
  * This relation will return the team object for the player;
  * @return type
  */
    public function team(){
        return $this->belongsToMany(Team::class,'team_id','id');
    }
}
