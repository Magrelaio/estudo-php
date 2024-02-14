<?php
//existem  pequenas funções que alteram... algumas coisinhas interessantes, tais qual:
//array_key_exists(); VERIFICA SE O ARRAY EXISTE
//in_array VERIFICA SE TEM VALOR! (diferente de Null, ou só um espaço vazio)
//isset verifica se o valor é nulo  
$notas = [
    'Vincius' => null,
    'Ana' => 10,
    'Souza' => 5,
    'Rafael' => 4,
];

$notas2 = [
    'Vincius' => null,
    'Ana' => 9,
    'Souza' => 5,
    'Rafael' => 4,
];

ksort(array: $notas);
var_dump($notas);

echo 'Ana fez a prova?' . PHP_EOL;
var_dump(isset($notas['Ana'])) . PHP_EOL;

echo 'E o Vinicius?' . PHP_EOL;
var_dump(isset($notas['Vinicius'])) . PHP_EOL;

//verificação de item no array
echo "Alguemt tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas)); //posso adicionar tambem strict nessa verificação do inarray, Caso eu transforme todos os numeros em array, ele identificará como integer, porem com o strict isto deixa de funcioanr!
//ai agora como procuramos um item em um array? IZI, SEGUE O PAI
echo" Quem tirou 10?" . PHP_EOL;
echo array_search(needle: 10,haystack: $notas) . PHP_EOL;

var_dump(array_diff($notas, $notas2)); //mostra todas as diferenças entre arrays, existem outras formas dessa função tais como: array_diff_key que mostra a diferença entre letras, e array_diff_assoc que é associative que mostra a diferença entre TUDO.

