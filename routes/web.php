<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/features'], function () {
    Route::get('/wordsearch', function () {
        return view('pages.wordsearch');
    });

    Route::get('/synant', function () {
        return view('pages.synant');
    });

    Route::get('/rhyme', function () {
        return view('pages.rhyme');
    });

    Route::get('/pow', function () {
        return view('pages.partofword');
    });

    Route::get('/related', function () {
        return view('pages.related');
    });

    Route::get('/associated', function () {
        return view('pages.associated');
    });

    Route::get('/def', function () {
        return view('pages.definition');
    });

});