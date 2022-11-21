<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/{any}', function () {
    return view('index');
})->where('any', '^(?!graphql\/)[\/\w\.\,-]*');
