<?php

$testList = [19, 93, 38, 03, 13, 90];

//ah q n sei q lá, quero sempre exibir essa lista de forma dinamica - se adicionar mais itens na lista n quero ter q me arrombar e contar tudo
//VAI SEGURANDO CHARÁ

for( $i = 0; $i < count($testList); $i++ )
    echo "$testList[$i]" . PHP_EOL;

//ah q n sei oq, quero criar lista com informações, por exemplo: Nome = João, DInheiro = 1000
echo "=========================================================================". PHP_EOL;

$conta = [
    'nome' => 'João',
    'dinheiro' => 1000
];
//ai tu chama ela assim pai
echo $conta['nome'] . PHP_EOL;

//se tiver varias informações da pra fazer assim:
echo "=========================================================================". PHP_EOL;

$conta1 = [
    "nome"=> "nome1",
    "dinheiro"=>  1000
];

$conta2 = [
    "nome"=> "nome2",
    "dinheiro"=> 200
];

$conta3 = [
    "nome"=> "nome3",
    "dinheiro"=> 3000
];

$todasContas = [$conta1, $conta2, $conta3];

for ($c = 0; $c < count($todasContas); $c++){
    echo $todasContas[$c]['nome'] . PHP_EOL;
};

echo "========================For Each====================================". PHP_EOL;
//CONTUDO, tem uma forma mais legivel de escrever isso... Segue o fluxo aq
foreach ($todasContas as $contas){
    echo $contas['dinheiro'] . PHP_EOL;
};

echo "========================Caso voce queira criar o indice:====================================". PHP_EOL;
$exemplo = [
    10203040410 => [
        'nome' => 'julio',
        'dinheiro' => 2000
    ],
    20304050510 => [
        'nome' => 'maria',
        'dinheiro' => 3000
    ]
];

//ah quero adiiconar novos itens ai nesse array... :( como faço? VEM VER! BAHAHA
$exemplo[45454545454] = [
    'nome'=> 'AH sei la paizão - nome novo1',
    'dinheiro' => 8000 #VEM COM O MONSTRO
];

foreach ($exemplo as $cpf => $valor) {
    echo "CPF: " . $cpf . PHP_EOL;
    echo "Nome: " . $valor['nome'] . PHP_EOL;
    echo "Dinheiro: " . $valor['dinheiro'] . PHP_EOL;
    echo "------------------------" . PHP_EOL;
};#VaiCurintia

//se fosse pra adicionar num array mais simples ou numerico, seria assim:
$a_simples = [10, 20, 30, 40];
echo "antes de adcionar:" . print_r($a_simples); #print_r ajuda a imprimir a estrutura do array de uma forma mais adequada - SEM DAR ERRO

$a_simples[] = 60;
echo "depois:" . print_r($a_simples); // ta bugado e o depois ta saindo literalmente depois do array... enfim, deu pra entender

?>