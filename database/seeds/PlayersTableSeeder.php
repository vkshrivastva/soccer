<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Player;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment()==='local' || App::environment()==='testing'){
            $teamList= Team::all()->pluck('id')->toArray();
            foreach($teamList as $teamId){
                factory(Player::class,11)->create()->each(function($player) use($teamId){
                    $player->image_uri=rand(1,12).'.jpg';
                    $player->team_id=$teamId;
                    $player->save();
                });
            }
        }
    }
}
