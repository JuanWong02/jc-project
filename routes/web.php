<?php

use App\Controllers\HomeController;
use Jc\Auth\Auth;
use Jc\Routing\Route;

Auth::routes();

Route::get('/',fn () => redirect('/home'));
Route::get('/home', [HomeController::class, 'show']);

