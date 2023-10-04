<?php

use Jc\Routing\Route;

Route::get('/api', fn () => json(["message" => "Jc API"]));