<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Authentification applicative : Fortify (session web). Pas d'API token/JWT.
|
*/

Route::get('hello', function () {
    return response()->json('hello world');
});
