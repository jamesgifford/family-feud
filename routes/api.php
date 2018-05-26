<?php

use Illuminate\Http\Request;


Route::post('/buzz/{room}', 'Api\BuzzController@buzzIn');
