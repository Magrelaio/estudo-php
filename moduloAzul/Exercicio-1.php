<?php
$notas = [
    10, 
    8, 
    9, 
    7
];

$notasOrdenadas = $notas;
echo sort(array: $notasOrdenadas);

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas';
var_dump($notasOrdenadas);

//agora se estiver com strings por exemplo... Vai sair em ordem alfabetica como 'Dois', 'Três', 'Um', veja:
$numero = [
    'um',
    'tres',
    'sete',
    'dois'
];

$numeroOrdenado = $numero;
echo sort(array: $numeroOrdenado);

echo 'Numero Desordenado:';
var_dump($numero);

echo 'Numero Ordenado';
var_dump($numeroOrdenado);