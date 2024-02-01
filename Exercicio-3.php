<?php
//continuando aq LOL -pq lá ja tava ficando bem bagunçado... ENFIM, VAMOS DAR CONTINUIDADE
//bora fazer um sistema de saque e deposito em um banquinho de mentirinha rapaz.

//criando pequena função pro cabra n tirar mais dinheiro doq tem e ficar negativo:

//include 'Exercicio-3-Functions.php';
//include está meio errado, uma vez que torna o arquivo importado não muito importante. Quando o arquivo é essencial para o funcionamento do programa, é necessario usar o REQUIRE!
require 'Exercicio-3-Functions.php';
//existe tambem o require_once, que serve para incluir o arquivo uma UNICA vez.

$contasCorrente = [
    '20510221065'=> [
        "titular"=> "Jonas",
        "saldo" => 1200    
    ],

    '10825248755' => [
        "titular"=> "Helena",
        "saldo"=> 2000
    ],

    '215645732566' => [
        "titular" => "Thiago",
        "saldo" => 2050
    ],
];

// $contasCorrente['123685987440'] = [
//     "titular" => "Claudia",
//     "saldo" => 1500
// ]

//Ah quero sacar o bglh CHEGA MAIS:
//to fazendo a funçãi la em cima :/
$contasCorrente['10825248755'] = sacar($contasCorrente['10825248755'], ValorASacar:500);
$contasCorrente['20510221065'] = sacar($contasCorrente['20510221065'], ValorASacar:1500);


//indo depositar chama
$contasCorrente['215645732566'] = depositar($contasCorrente['215645732566'], ValorDep: 300);

echo "Aqui não tem nada porque ele roda na function 2!";

function exibirMensagemHTML($contasCorrente){
    echo "Só um teskmte";
}
//algo interessante que eu gostaria de comentar aqui são as diferenças entre passagens por valor e por referencia. Sendo:
//passagem de variavel por valor: Altera apenas um "clone" da vasriavel desejada. - e passagem por variavel por referencia altera a variavel inteira
//aqui vai um exemplo disso: function (&$variavel)