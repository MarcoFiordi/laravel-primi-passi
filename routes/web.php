<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Marco";
    return view('home', [
        'nome' => $nome
    ]);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');