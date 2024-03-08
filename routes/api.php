<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('receber/nome', function (Request $request) {
    $nome = $request->input('name');
    return $nome;
});
Route::get('naise', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('year');

    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos de idade';
});
