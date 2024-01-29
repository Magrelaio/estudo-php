<?php


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

foreach ($contasCorrente as $cpf => $conta) {
    exibirMensagem(
        mensagem:"CPF {$cpf}  {PHP_EOL} Titular: {$conta['titular']} Saldo:  {$conta['saldo']}  {PHP_EOL}  ============================ . PHP_EOL"
    );
};
?>