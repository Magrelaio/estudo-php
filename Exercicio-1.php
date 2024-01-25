<!-- Este documento é um estudo de integração entre PHP e HTML. -->
<?php
echo "Depois usar oq ta no outro pc... é só estudo mesmo, ninguem vai ver hHAHAH";
////for loop é tipo: for (condição pra entrar; condição pra parar; oq ele vai fazer enquanto num atingir a condição)
for ($contagem = 1; $contagem <= 15; $contagem ++){
    echo "$contagem" . PHP_EOL;
};

//diferença de while e for: While é para algo mais dinamico como: quer que o usuario pare o loop ou pare o loop quando der erro, sla.

//para ignorar um item durante a execução de um loop; VAI VENO SÓ

for ($cabras_sla = 1; $cabras_sla <= 10; $cabras_sla ++){
    //vou tirar a 7a cabra pq ela morreu - ou sla
    if ($cabras_sla == 7){
        continue;
    }else{
        echo "#$cabras_sla". PHP_EOL;
    }
};

echo "=========================================================================". PHP_EOL;
//criação da tabuada de qualquer numero BAHAHAH
$tabuada = 3;
for ($multiplicador = 1; $multiplicador <=10; $multiplicador ++){
    $resultado = $tabuada * $multiplicador;
    echo "$multiplicador x $tabuada = $resultado" . PHP_EOL;
}

echo "=========================================================================". PHP_EOL;
//calculo de imc chama
$peso = 40;
$altura = 190;
$imc = $peso / $altura**2;

if( $imc < 18.5){
    echo"Seu peso está abaixo da média." . PHP_EOL;
}elseif( $imc < 25){
    echo"Seu peso está na media." . PHP_EOL;
} else{
    echo"Seu peso está acima da média." . PHP_EOL;
} 

?>