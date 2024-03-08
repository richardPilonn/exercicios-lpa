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

Route::get('multiplicação' , function (Request $request){

    $numeroUm = $request->input('number1');
    $numeroDois = $request->input('number2');

    $resultado = $numeroUm * $numeroDois ; 

    return $resultado;

});

Route::get('média' , function (Request $request){
    
    $notaUm = $request->input('number1');
    $notaDois = $request->input('number2');
    $notaTres = $request->input('number3');
    $notaQuatro = $request->input('number4');
    $notaCinco = $request->input('number5');

    $resultado = ($notaUm + $notaDois + $notaTres + $notaQuatro + $notaCinco) /'5';

    return $resultado;

});

Route::get('divisão2' , function (request $request){

    $numeroUm = $request->input('number1');
    $numeroDois = $request->input('number2');

    $resultado = $numeroDois / $numeroUm;

    return $resultado;
});

Route::get('dobro' , function (request $request){

    $numeroUm = $request->input('number1');

    $resultado = $numeroUm * '2';

    return 'O dobro de ' . $numeroUm . ' é igual a: ' . $resultado;

});

Route::get('retangulo' , function (request $request){

    $baseRetangulo = $request->input('num1');
    $alturaRetangulo = $request->input('num2');

    $resultado = $baseRetangulo * $alturaRetangulo;

    return $resultado;

});

Route::get('loja' , function (Request $request){

    $produto = $request->input('preço');
    $desconto = $request->input('cupom');
    
    $resultado = $desconto / '100' * $produto;
    $resultado2 = $produto - $resultado;

    return 'o produto custa ' . $produto . ' com o desconto de ' .  $desconto . '% fica ' . $resultado2;


});

