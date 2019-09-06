<?php

use App\Model\Question;
use Illuminate\Http\Request;

Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

// Route::apiResource('/questions', "QuestionController");
// Route::apiResource('/category', "CategoryController");
// Route::apiResource('/question/{question}/reply', "ReplyController");
// Route::post("/like/{reply}", "LikeController@likeIt");
// Route::delete("/like/{reply}", "LikeController@unlikeIt");
