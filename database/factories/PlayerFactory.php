<?php

use Faker\Generator as Faker;

$factory->define(\App\Player::class, function (Faker $faker) {
    return [
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'image_uri'=>'',
        'team_id'=>1
    ];
});
