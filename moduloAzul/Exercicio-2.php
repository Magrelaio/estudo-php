<?php
//manipulando array dentro de outro array

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];
function ordenaNotas(array $nota1, array $nota2): int
{
    if($nota1['nota'] > $nota2['nota']){
        return -1;
    } return 1;

}
usort(array:$notas, callback:'ordenaNotas');
var_dump($notas);