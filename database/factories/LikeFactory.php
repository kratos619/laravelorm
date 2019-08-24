<?php

use App\Model\Question;
use App\Model\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Like::class, function (Faker $faker) {
    return [
        "user_id" => function () {
            return User::all()->random();
        },
        "reply_id" => function () {
            return Reply::all()->random();
        }
    ];
});
