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
function ordenaNotas(array $nota1, array $nota2)
{
    if($nota1['nota'] <=> $nota2['nota']){
        return 1;
    }
};
//usort(array:$notas, callback:'ordenaNotas'); //usuaruio define com funções como trabalhar com esse array

//ai temos como ordenar de diferentes maneiras, como por exemplo:
//asort(array: $notas); //organizar em ordem alfabética
//arsort(array: $notas); //o R faz ele fazer os arrays ao contrario (em ordem alfabetica Z-A, em ordem numerica 10-1)
//rsort(array aqui); mesma coisa que em cima
var_dump($notas);