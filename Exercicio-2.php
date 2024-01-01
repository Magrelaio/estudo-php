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

//se tiver varias da pra fazer assim:
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
?>