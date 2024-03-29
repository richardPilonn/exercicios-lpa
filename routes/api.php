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

Route::get('nome/nascimento/cidade', function (Request $request) {

    $nome = $request->input('name');

    $nascimento = $request->input('nasci');

    $cidade = $request->input('cidade');

    return ' Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de ' . $cidade;
});

Route::get('calculadora', function (Request $request) {

    $primeiraEntrada = $request->input('primeiraNota');

    $segundaEntrada = $request->input('segundaNota');

    $resultado = ($primeiraEntrada + $segundaEntrada);

    return $resultado;
});

Route::get('subtraçao', function (Request $request) {

    $primeiroNum = $request->input('number1');
    $segundoNum = $request->input('number2');
    $terceiroNum = $request->input('number3');

    $resultado = $primeiroNum - $segundoNum - $terceiroNum;

    return $resultado;
});

Route::get('divisão', function (request $request) {

    $numeroOne = $request->input('number1');
    $numeroTwo = $request->input('number2');

    $resultado = $numeroOne / $numeroTwo;

    return $resultado;
});

Route::get('multiplicação', function (Request $request) {

    $numeroUm = $request->input('number1');
    $numeroDois = $request->input('number2');

    $resultado = $numeroUm * $numeroDois;

    return $resultado;
});

Route::get('média', function (Request $request) {

    $notaUm = $request->input('number1');
    $notaDois = $request->input('number2');
    $notaTres = $request->input('number3');
    $notaQuatro = $request->input('number4');
    $notaCinco = $request->input('number5');

    $resultado = ($notaUm + $notaDois + $notaTres + $notaQuatro + $notaCinco) / '5';

    return $resultado;
});

Route::get('divisão2', function (request $request) {

    $numeroUm = $request->input('number1');
    $numeroDois = $request->input('number2');

    $resultado = $numeroDois / $numeroUm;

    return $resultado;
});

Route::get('dobro', function (request $request) {

    $numeroUm = $request->input('number1');

    $resultado = $numeroUm * '2';

    return 'O dobro de ' . $numeroUm . ' é igual a: ' . $resultado;
});

Route::get('retangulo', function (request $request) {

    $baseRetangulo = $request->input('num1');
    $alturaRetangulo = $request->input('num2');

    $resultado = $baseRetangulo * $alturaRetangulo;

    return $resultado;
});

Route::get('loja', function (Request $request) {

    $produto = $request->input('preço');
    $desconto = $request->input('cupom');

    $resultado = $desconto / '100' * $produto;
    $resultado2 = $produto - $resultado;

    return 'o produto custa ' . $produto . ' com o desconto de ' .  $desconto . '% fica ' . $resultado2;
});

Route::get('salario', function (request $request) {

    $salario = $request->input('salario');
    $aumento = $request->input('aumento');

    $resultado = $aumento / 100 * $salario;

    $resultado2 = $salario + $resultado;

    return 'o salario era ' . $salario . ' com o aumento percentual de ' . $aumento . '% ficou:' . $resultado2;
});

Route::get('compra', function (Request $request) {

    $valor = $request->input('value');

    $resultado = $valor / 10;
    $pontos = $resultado * 1;

    return ' a quantidade de pontos adquiridos é de ' . $pontos;
});

Route::get('vendas', function (Request $request) {

    $valorVendas = $request->input('value');
    $comissao = 5;
    $resultado = $valorVendas / 100 * $comissao;

    return 'o valor da comissão é ' . $resultado;
});
Route::get('tempo', function (Request $request) {

    $dias = $request->input('day');

    $horas = $dias * 24;

    $minutos = $horas * 60;

    $segundos = $minutos * 60;

    return 'o total de dias foram ' . $dias . ' e o total de horas desses dias é ' . $horas .
        ' e possui um total de ' . $minutos . ' minutos, e um total de ' . $segundos . ' segundos';
});

Route::get('compras', function (Request $request) {

    $produtos = $request->input('quant');
    $preço = $request->input('preço');

    $resultado = $produtos  * $preço;

    return 'o preço do produto é ' . $preço . ' e a quantidade compra foi de ' . $produtos .
        ' dito isso o total da compra foi de ' . $resultado;
});

Route::get('lista/Exercício3', function (Request $request) {
    $idade = $request->input('idade');
    $retorno = '';
    if ($idade >= 18) {
        $retorno = ' você maior de idade';
    } else {
        $retorno = "você é menor de idade";
    }
    return $retorno;
});


Route::get('caixaRapido',  function (Request $request) {

    $itens = $request->input('itens');
    $retorno = '';
    if ($itens <= 10) {
        $retorno = 'pode usar este caixa';
    } else {
        $retorno = "não pode usar este caixa";
    }
    return $retorno;
});

Route::get('acordar', function (Request $request) {

    $horaQueAcordar = $request->input('horario');
    $retorno = '';
    if ($horaQueAcordar <= 8) {
        $retorno = 'não esta atrasado';
    } else {
        $retorno = 'está atrasado';
    }
    return $retorno;
});

Route::get('lista/Exercício4', function (Request $request) {

    $numero = $request->input('num1');

    if ($numero % 2 == 0) {
        return 'o numero é par';
    } else {
        return 'o numero é impar';
    }
});

Route::get('lista/exercicio1', function (Request $request) {

    $numero1 = $request->input('num1');
    if ($numero1 <= 10) {
        $retorno = 'menor que 10';
    } else {
        $retorno = 'maior que 10';
    }
    return $retorno;
});

Route::get('lista/Exercício2', function (request $request) {

    $numero = $request->input('num1');
    $retorno = '';

    if ($numero > 0) {
        $retorno = 'o numero é positivo';
    } else if ($numero == 0) {
        $retorno = 'o numero é igual a 0';
    } else {
        $retorno = 'o numero é negativo';
    }
    return $retorno;
});

Route::get('lista/Exercício5', function (Request $request) {

    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');

    if ($numero1 > $numero2) {
        return "O número " . $numero1 . " é maior que " . $numero2;
    } else {
        return "O número " . $numero2 . " é maior que " . $numero1;
    }
});

Route::get('verifica/divisivel', function (Request $request) {

    $numero = $request->input('num1');
    if ($numero % 3 == 0) {
        return 'O número ' . $numero . " é divisivel por 3";
    } else {
        return 'O número ' . $numero . " não é divisivel por 3";
    }
});

Route::get('lista/Exercício6', function (Request $request) {

    $numero = $request->input('num1');
    if ($numero % 9 == 0) {
        return 'o número ' . $numero . ' é divisivel por 9';
    } else {
        return 'o numero ' . $numero . ' não é divisivel por 9';
    }
});
Route::get('lista/Exercício7 ', function (Request $request) {

    $temp = $request->input('temp');
    $retorno = '';

    if ($temp <= 30) {
        $retorno = 'A temperatura atual é ' . $temp;
    } else {
        $retorno = 'A temperatura é ' . $temp . ', está quente';
    }
    return $retorno;
});

Route::get('lista/Exercício8', function (Request $request) {

    $numero = $request->input('num1');

    if ($numero % 7 == 0) {
        return 'o numero ' . $numero . ' é multiplo de 7';
    } else {
        return 'o numero ' . $numero . ' não é multiplo de 7';
    }
});

Route::get('lista/Exercício9', function (Request $request) {

    $numero = $request->input('num1');

    if ($numero < 12) {
        return 'você é uma criança';
    } else {
        return 'você não é uma criança';
    }
});

Route::get('lista/Exercício10', function (Request $request) {


    $numero = $request->input('num1');

    if ($numero > 0) {
        if ($numero % 2 != 0) {
            return 'o numero é positivo e impar';
        }
    }
});

Route::get('lista/Exercício11', function (Request $request) {

    $numero = $request->input('num1');

    if ($numero > 100) {
        return 'o numero é maior que 100';
    } else if ($numero == 100) {
        return 'o numero é igual a 100';
    } else {
        return 'o numero é menor que 100';
    }
});

Route::get('lista/Exercício12', function (request $request) {

    $numero = $request->input('num1');

    if ($numero % 6 == 0) {
        return 'O número ' . $numero . " é divisivel por 6";
    } else {
        return 'O número ' . $numero . " não é divisivel por 6";
    }
});

Route::get('lista/Exercício13', function (request $request) {

    $nome = $request->input('name');

    if ($nome == 'alice') {
        return 'Olá, Alice!';
    }
});
Route::get('lista/Exercício14', function (request $request) {

    $idade = $request->input('year');
    $carteiraMotorista = $request->input('possui carteira de motorista?');

    if ($idade >= 18) {
        if ($carteiraMotorista == 'sim') {
            return 'você é maior de idade, possui carteira de motorista, então pode dirigir!!';
        } else {
            return 'você não pode dirigir , pois você não tem carteira';
        }
    } else {
        return 'você não pode dirigir';
    }
});

Route::get('lista/Exercício16', function (Request $request) {


    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');

    if ($numero1 != $numero2) {
        if ($numero1 < $numero2) {
            return "O número " . $numero1 . " é menor que " . $numero2;
        } else {
            return "O número " . $numero2 . " é menor que " . $numero1;
        }
    } else {
        return 'os numeros são iguais';
    }
});

Route::get('lista/Exercício17', function (request $request) {

    $nome = $request->input('name');
    $idade = $request->input('year');

    if ($idade >= 18) {
        return 'Você é maior de idade, ' . $nome . '!';
    } else
        return 'você é menor de idade, ' . $nome . '!';
});

Route::get('lista/Exercício18', function (request $request) {

    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');

   
    
        if ($numero1 == 0) {
            return 'não é possível efetuar a divisão pois o primeiro número é zero';
        } else if ($numero2 == 0) {
           return  'não é possível efetuar a divisão pois o segundo número é zero';
        } else {
            $resultado = ($numero1 / $numero2);
            return 'o resultado da divisão é ' . $resultado;
        }
    
});

Route::get('lista/Exercício19', function (request $request) {

    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');

    if($numero1 * $numero2 > 100){
        $resultado = $numero1 * $numero2 ;
        return ' o resultado da multiplicação do numero ' . $numero1 . ' pelo numero ' . $numero2 . ' é maior que 100 e = ' . 
        $resultado;
    } else if ($numero2 * $numero1 > 100){
        $resultado = $numero2 * $numero1 ;
        return ' o resultado da multiplicação do numero ' . $numero2 . ' pelo numero ' . $numero1 . ' é maior que 100 e = ' . 
        $resultado;
    } else {
        return 'a multiplicação dos numeros não resulta em um numero que seja maior que 100';
    }
});

