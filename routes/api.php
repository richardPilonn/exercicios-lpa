<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
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

Route::get('salario' , function (request $request){

    $salario = $request->input('salario');
    $aumento = $request->input('aumento');

    $resultado = $aumento / 100 * $salario;

    $resultado2 = $salario + $resultado;

    return 'o salario era ' . $salario . ' com o aumento percentual de ' . $aumento . '% ficou:' . $resultado2;



});

Route::get('compra' , function (Request $request){

    $valor = $request->input('value'); 

    $resultado = $valor / 10;
    $pontos = $resultado * 1;
    
    return ' a quantidade de pontos adquiridos é de ' . $pontos;

});

Route::get('vendas' , function (Request $request){

    $valorVendas = $request->input('value');
    $comissao = 5;
    $resultado = $valorVendas / 100 * $comissao;

    return 'o valor da comissão é ' . $resultado;

});
Route::get('tempo' , function (Request $request){

    $dias = $request->input('day');
    
    $horas = $dias * 24;

    $minutos = $horas * 60;

    $segundos = $minutos * 60;

    return 'o total de dias foram ' . $dias . ' e o total de horas desses dias é ' . $horas . 
    ' e possui um total de ' . $minutos . ' minutos, e um total de ' . $segundos . ' segundos';

});

Route::get('compras' , function (Request $request){

    $produtos = $request->input('quant');
    $preço = $request->input('preço');

    $resultado = $produtos  * $preço;

    return 'o preço do produto é ' . $preço . ' e a quantidade compra foi de ' . $produtos . 
    ' dito isso o total da compra foi de ' . $resultado;

});

Route::get('exemplo/condição' , function (Request $request){ 
    $idade = $request->input('idade');
    $retorno = '';
    if($idade >= 18 ){
        $retorno = 'maior de idade';
    }
    else { 
        $retorno = "menor de idade";
    }
    return $retorno;

});


Route::get('caixaRapido' ,  function (Request $request){

    $itens = $request->input('itens');
    $retorno = '';
    if($itens <= 10 ){
        $retorno = 'pode usar este caixa';
    }
    else {
        $retorno = "não pode usar este caixa";
    }
    return $retorno;
});

Route::get('acordar', function (Request $request){

    $horaQueAcordar = $request->input('horario');
    $retorno = '';
    if($horaQueAcordar <= 8 ){
        $retorno = 'não esta atrasado';
    }
    else { 
        $retorno = 'está atrasado';
    }
    return $retorno;
});

Route::get('im/par' , function (Request $request){

    $numero = $request->input('num1');
    
    if($numero % 2 == 0){
        return 'par';
    } else {
        return 'impar';
    }
    

});

