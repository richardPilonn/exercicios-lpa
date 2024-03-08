<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/frase", function(){
    return 'Minha cidade é Presidente Epitácio';

});