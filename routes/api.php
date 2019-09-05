<?php

use App\Model\Question;
use Illuminate\Http\Request;

Route::apiResource('/questions', "QuestionController");
Route::apiResource('/category', "CategoryController");
