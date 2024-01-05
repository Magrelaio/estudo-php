<?php
//continuando aq LOL -pq lá ja tava ficando bem bagunçado... ENFIM, VAMOS DAR CONTINUIDADE
//bora fazer um sistema de saque e deposito em um banquinho de mentirinha rapaz.

//criando pequena função pro cabra n tirar mais dinheiro doq tem e ficar negativo:
function exibirMensagem($mensagem) {
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
 if(500 > $contasCorrente["20510221065"]["saldo"]){
    exibirMensagem(mensagem: "Você não pode sacar por saldo insuficiente!");
 }else{
    $contasCorrente["20510221065"]["saldo"] -= 500;
 };

 if(2500 > $contasCorrente["10825248755"]["saldo"]){
    exibirMensagem(mensagem: "Você não pode sacar por saldo insuficiente!");
 }else{
    $contasCorrente["20510221065"]["saldo"] -= 2500;
 };

foreach ($contasCorrente as $cpf => $conta) {
    echo "CPF:". $cpf . PHP_EOL . "Titular:". $conta["titular"] . PHP_EOL . "Saldo:" . $conta["saldo"] . PHP_EOL . "============================" . PHP_EOL;
};
?>