<?php
//continuando aq LOL -pq lá ja tava ficando bem bagunçado... ENFIM, VAMOS DAR CONTINUIDADE
//bora fazer um sistema de saque e deposito em um banquinho de mentirinha rapaz.

//criando pequena função pro cabra n tirar mais dinheiro doq tem e ficar negativo:
function sacar(array $conta, float $ValorASacar): array 
{
    if($ValorASacar > $conta["saldo"]){
        exibirMensagem(mensagem: "Você não pode sacar por saldo insuficiente!");
     }else{
        $conta["saldo"] -= $ValorASacar;
     };
    
     return $conta;
}

function depositar($conta, $ValorDep)
{
    if($ValorDep > 0){
    $conta['saldo'] += $ValorDep;
    } else{
         exibirMensagem(mensagem: "O valor de depósito precisa ser positivo");
    }
    return $conta;
}


function exibirMensagem($mensagem)
{
    echo $mensagem . PHP_EOL; // - essa vai se a msg"Você não pode sacar por saldo insuficiente." . PHP_EOL;
}

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


foreach ($contasCorrente as $cpf => $conta) {
    echo "CPF:". $cpf . PHP_EOL . "Titular:". $conta["titular"] . PHP_EOL . "Saldo:" . $conta["saldo"] . PHP_EOL . "============================" . PHP_EOL;
};
?>