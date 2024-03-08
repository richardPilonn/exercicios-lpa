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

Route::get('nome/nascimento/cidade' , function (Request $request){ 

    $nome = $request->input('name'); 

    $nascimento = $request->input('nasci');  
   
    $cidade = $request->input('cidade'); 

    return ' Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de ' . $cidade;

}); 

Route::get('calculadora' , function (Request $request){

    $primeiraEntrada = $request->input('primeiraNota');

    $segundaEntrada = $request->input('segundaNota');

    $resultado = ($primeiraEntrada + $segundaEntrada);

    return $resultado;


});

Route::get('subtraçao' , function (Request $request){

    $primeiroNum = $request->input('number1');
    $segundoNum = $request->input('number2');
    $terceiroNum = $request->input('number3');

$resultado = $primeiroNum - $segundoNum - $terceiroNum;

return $resultado;


});

Route::get('divisão' , function (request $request){

    $numeroOne = $request->input('number1');
    $numeroTwo = $request->input('number2');

    $resultado = $numeroOne / $numeroTwo ;

    return $resultado;
});