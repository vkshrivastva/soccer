<?php

use Illuminate\Database\Seeder;
use App\Team;
use Faker\Generator as Faker;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    private static $index=1;
    public function run()
    {
        if(App::environment()==='local' || App::environment()==='testing'){
            factory(Team::class,5)->create()->each(function($team){
                $team->logo_uri='team'.self::$index.'.jpg';
                $team->save();
                self::$index++;
            });
        }
    }
}
