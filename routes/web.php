<?php
$nome = "Marco";
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Marco";
    return view('home', [
        'nome' => $nome
    ]);
});
