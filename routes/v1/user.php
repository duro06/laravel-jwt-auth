<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::group([
    'middleware'=>'jwt.verify',
    'prefix'=>'user'
], function(){
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
