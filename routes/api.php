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

    if ($numero1 * $numero2 > 100) {
        $resultado = $numero1 * $numero2;
        return ' o resultado da multiplicação do numero ' . $numero1 . ' pelo numero ' . $numero2 . ' é maior que 100 e = ' .
            $resultado;
    } else if ($numero2 * $numero1 > 100) {
        $resultado = $numero2 * $numero1;
        return ' o resultado da multiplicação do numero ' . $numero2 . ' pelo numero ' . $numero1 . ' é maior que 100 e = ' .
            $resultado;
    } else {
        return 'a multiplicação dos numeros não resulta em um numero que seja maior que 100';
    }
});

Route::get('lista/Exercício20', function (request $request) {

    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');

    $resultado2 = $numero1 + $numero2;

    if (($numero1 + $numero2) % 2 == 0) {
        ($resultado = $numero1 * $numero2);
        return 'a soma dos numeros ' . $numero1 . ' + ' . $numero2 . ' = ' . $resultado2 .
            ', o resultado é par e a multiplação deles mesmo é  =  ' . $resultado;
    } else {
        ($resultado3 = $numero1 / $numero2);
        return  'a soma dos numeros ' . $numero1 . ' + ' . $numero2 . ' = ' . $resultado2 .
            ', o resultado é impar e a divisão do ' . $numero1 . ' pelo ' . $numero2 . ' = ' . $resultado3;
    }
});

Route::get('Exercícios/complementares1', function (request $request) {

    $numero1 = $request->input('num1');
    $numero2 = $request->input('num2');
    $numero3 = $request->input('num3');

    $Media = ($numero1 + $numero2 + $numero3) / 3;

    if ($Media >= 7) {
        return 'o aluno foi aprovado, média = ' . $Media;
    } else {
        return 'O aluno não foi aprovado, média =' . $Media;
    }
});

Route::get('Exercícios/complementares2', function (request $request) {

    $renda = $request->input('renda');

    if ($renda > 1900) {
        if ($renda >  2800) {
            if ($renda > 3700) {
                $resultado1 = 22 / 100 * $renda;
                $resultado2 = $renda - $resultado1;
                return 'O valor do imposto de renda do usuário = ' . $resultado1 .
                    ', sendo assim a renda é = ' . $resultado2;
            } else {
                $resultado5 = 7 / 100 * $renda;
                $resultado6 = $renda - $resultado5;
                return 'O valor do imposto de renda do usuário = ' . $resultado5 .
                    ', sendo assim a renda é = ' . $resultado6;
            }
        } else {
            $resultado3 = 15 / 100 * $renda;
            $resultado4 = $renda - $resultado3;
            return 'O valor do imposto de renda do usuário = ' . $resultado3 .
                'sendo assim a renda é = ' . $resultado4;
        }
    } else
        return 'O usuário está isento do imposto de renda pois sua renda (' . $renda . ') é menor que 1.900';
});

Route::get('Exercícios/complementares3', function (request $request) {

    $Ano = $request->input('ano');

    if ($Ano % 400 == 0) {
        return 'O ano ' .  $Ano . ' é bissexto';
    } else if ($Ano % 4 == 0) {
        return 'O ano ' .  $Ano . ' é bissexto';
    } else {
        return 'O ano ' .  $Ano . ' não é bissexto';
    }
});

Route::get('Exercícios/complementares4', function (request $request) {


    $produto = $request->input('num1');
    $valoroutrosprodutos = $request->input('num2');

    if (($valoroutrosprodutos + $produto) > 1000) {
        $resultado = 15 / 100 * $produto;
        $resultado2 = $produto - $resultado;
        return 'O valor do produto caiu pra ' . $resultado2 . ' com o desconto de ' . $resultado;
    } else {
        'o preço do produto se manteve o mesmo, não houve o desconto';
    }
});

Route::get('Exercícios/complementares5', function (request $request) {


    $altura = $request->input('altura');
    $peso = $request->input('peso');

    $IMC = $peso / ($altura * $altura);

    if ($IMC > 18.5) {
        if ($IMC > 24.9) {
            if ($IMC > 29.9) {
                if ($IMC > 34.9) {
                    if ($IMC > 39.9) {
                        return 'Obesidade Grau III ( ' . $IMC . ' kg/m2 )';
                    } else {
                        return 'Obesidade Grau II ( ' . $IMC . ' kg/m2 )';
                    }
                } else {
                    return 'Obesidade Grau I ( ' . $IMC .  'kg/m2 )';
                }
            } else {
                return 'Sobrepeso ( ' . $IMC . ' kg/m2 )';
            }
        } else {
            return 'peso adequado ('  . $IMC . ' kg/m2 )';
        }
    } else {
        return 'Abaixo do Peso ( ' . $IMC . ' kg/m2 )';
    }
});

Route::get('Exercícios/complementares6', function (request $request) {


    $salario = $request->input('salario');
    $função = $request->input('função');

    if ($função != 1) {
        if ($função != 2) {
            if($função != 3 ){
                if($função == 4){
                    $resultado7 = 20 / 100 * $salario;
                    $resultado8 = $resultado7 + $salario;
                    return 'Gerente, salario: ' . $salario . ', + a promoção de ' . $resultado7 . ', Salário final: ' . $resultado8;
                }
            } else 
                $resultado5 = 15 / 100 * $salario;
                $resultado6 = $resultado5 + $salario;
                return 'Analista, salario: ' . $salario . ', + a promoção de ' . $resultado5 . ', Salário final: ' . $resultado6;
        } else 
            $resultado3 = 10 / 100 * $salario;
            $resultado4 = $resultado3 + $salario;
            return 'Técnico, salario: ' . $salario . ', + a promoção de ' . $resultado3 . ', Salário final: ' . $resultado4;
    } else {
        $resultado = 5 / 100 * $salario;
        $resultado1 = $resultado + $salario;
        return 'Operario, salario: ' . $salario . ', + a promoção de ' . $resultado . ', Salário final: ' . $resultado1;
    }
});

//Escreva um programa que imprima os numeros de 1 a 10

Route::get('laço' , function (Request $request) {

    for($i=0; $i <=10; $i++){
    echo $i . " ";
    }
});

//Escreva um programa que imprima os numeros de 10 a 1

Route::get('laço2' , function (Request $request) {

    for($i=10; $i >= 1; $i--){
        echo $i . " ";
        }

});

//escreva um programa que exiba os numeros pares de 1 a 20

Route::get('laço3' , function (Request $request) {
    
    for($i=1; $i <= 20; $i++){
        if($i % 2 == 0 ){
            echo $i . " ";
        }
        }

});

 //Escreva um programa que conte números pares

Route::get('laço4' , function (Request $request) {

    for($i=0; $i <=10; $i++){
    echo $i * 2 . " ";
    }
});

//Escreva um programa que conte quantos numero de 1 a 100
// são divisiveis por 5

Route::get('laço5' , function (Request $request) {
    
    $contador = 0;

    for($i=1; $i <=100; $i++){
        if($i % 5 == 0){
         $contador++ . " ";
        }
        }
        echo $contador;
    });
//escreva um progarama que calcule a soma dos numeros pares de 1 a 10

Route::get('laço6' , function (Request $request) {

    $soma = 0;

    for($i=1; $i <=10; $i++){
        if($i % 2 == 0){
            $soma = $soma + $i;
        }
    }
    echo $soma;

});

//Escreva um programa que exiba a soma dos números de 1 a 10
Route::get('laço7' , function (Request $request) {
$soma = 0;
    for($i=0; $i <=10; $i++){
     $soma = $soma + $i;
    }
    echo $soma . " ";
});

// Escreva um programa que exiba os números de 1 a 50 em ordem decrescente

Route::get('laço8' , function (Request $request) {

    for($i=50; $i >= 1; $i--){
    echo $i . " ";
    }
});

Route::get('laço9' , function (Request $request) {

    $numero = $request->input('num');
    for($i=0; $i <=10; $i++){
    echo $numero . 'X' . $i . '=' . $i * $numero . '<br /> ';
    }
});

Route::get('laço10' , function (Request $request) {
$par = 0;
$impar = 0;
    for($i=10; $i <=75; $i++){
    if($i % 2 == 0){
        $par++;
    } else {
        $impar++;
    }
    }
    echo $par . ' par '. " " . $impar . ' impar';

});


Route::get('laço11' , function (Request $request) {
$soma = 0;
    for($i=1; $i <=15; $i++){
     $soma = $soma + $i;
     
    }
    echo $soma / 5;
});

Route::get('EX/pratica1' , function (Request $request) {
    
    $linhas = 5;

    for ($i = 1; $i <= $linhas; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i . " ";
        }
        echo "<br>";
    }
        
    });
    //Soma dos números pares: Escreva um programa que calcule a soma dos números pares de 1 a 100 utilizando um loop for.

    Route::get('EX/pratica2' , function (Request $request) {

        $par = 0;
        for($i=1; $i<=100; $i++){
            if($i % 2 == 0){
                $par = $i + $par;

            }
        } echo $par . " ";
});

// Tabuada: Crie um programa que exiba a tabuada de multiplicação de um número escolhido
// pelo usuário. Use um loop for para iterar de 1 a 10

Route::get('EX/pratica3' , function (Request $request) {

    $numero = $request ->input('num');
    for($i = 0; $i<=10; $i++){
        echo $numero . ' X ' . $i . ' = ' . $numero * $i . "<br>" ;
    }
});

// PAUSE -----------------------------------

// ESTUDO SOBRE VETORES
Route::get('vetor', function (){

    $numero = [ ];
    $numeros = [2,7,14,28,100];
    $frutas = ['maça', 'banana', 'pera'];
     
     for($i = 0; $i<3; $i++){
        echo $frutas [$i] . " ";
        
     }
});

Route::get('vetor2', function (){

    $numero = [ ];
    $numeros = [2,7,14,28,100];
    $frutas = ['maça', 'banana', 'pera'];
     

    $i = 0;
    while($i<3){
        echo $frutas [$i] . " ";
    $i++;
    }
});  
Route::get('vetor3', function (){
$numeros = [0, 5, 10, 15, 20 , 25, 30];
$quantidade = count($numeros);
$soma = 0;
 
for ($i = 0; $i  < $quantidade; $i++){
    if($i % 2 == 0){
    $soma = $soma + $numeros [$i];
}
}
echo $soma;

});

Route::get('vetor4', function (){
  
    $numeros = [10,11,15,4,5,6,9,1];
    $frutas = ['uva', 'banana', 'abacate', 'mamão'];
    $cont = $numeros [0];

    for($i = 1; $i < count($numeros); $i++){
       if($numeros[$i] > $cont){
            $cont = $numeros[$i];

        }  
    } 
    
    echo 'maior numero é ' . $cont;
});

Route::get('vetor5', function (){
    $numeros = [10,11,15,4,5,6,9,1];
    $frutas = ['uva', 'banana', 'abacate', 'mamão'];

    for($i = 0; $i < count($numeros); $i++){
        if($numeros [$i] % 2 == 0){
            echo $numeros [$i] . "<br />";
        }
    }
});
//exibir sexta feira
Route::get('vetor5', function (){
    $dias = ['domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta'];
    echo $dias [5];
    
});

// ordenando os numeros em ordem crescente
Route::get('vetor6', function (){

    // Define the matrix
    $numeros = [
        [5, 4, 7],
        [1, 3, 8],
        [2, 9, 6]
    ]; 
    
    
    $quantidade = count($numeros);
    
    
    $NM = [];
    
    
    for ($i = 0; $i < $quantidade; $i++) {
        for ($j = 0; $j < $quantidade; $j++) {
            $NM[] = $numeros[$i][$j];
        }
    }
    
    
    sort($NM);
    
    
    $k = 0;
    for ($i = 0; $i < $quantidade; $i++) {
        for ($j = 0; $j < $quantidade; $j++) {
            $numeros[$i][$j] = $NM[$k++];
        }
    }
    
    echo "ordem crescente:<br>";
    for ($i = 0; $i < $quantidade; $i++) {
        for ($j = 0; $j < $quantidade; $j++) {
            echo $numeros[$i][$j] . " ";
        }
        echo "<br>";
    }
    
    });
    
// Crie um array de três frutas e exiba cada uma delas.
Route::get('lista/exercicio/blocoNotas1', function (){
$frutas = ['maça', 'banana', 'melon'];
    for($i = 0; $i <= count($frutas); $i++){
        echo $frutas [$i] . " ";
    }
});

//Acesse e exiba o segundo elemento de um array de cores.
Route::get('lista/exercicio/blocoNotas2', function (){

    $cores = ['vermelho', 'azul', 'amarelo'];
    echo $cores [1];
});  

//Modifique o primeiro elemento de um array de números para 10 e exiba o array.
Route::get('lista/exercicio/blocoNotas3', function (){

        $array = [10, 17 , 11, 7];

        for($i =0; $i <= count($array); $i++){
        echo $array [$i] . " ";
        }
});  

//Conte e exiba o número de elementos em um array de itens.
Route::get('lista/exercicio/blocoNotas4', function (){

        $itens = ['mouse', 'teclado', 'tela', ]
});  

