<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;
    protected $fillable=[
      'name',
      'logo_uri'
    ];

    
    /**
     * This method will return list of association players with the team
     * [players description]
     * @return [type] [description]
     */
    public function players(){
        return $this->hasMany(Player::class);
    }

}
