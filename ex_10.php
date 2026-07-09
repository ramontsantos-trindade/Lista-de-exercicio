<?php

function calcularMedia(array $notas) {
    

    $maiorNota = max($notas);
    $menorNota = min($notas);

   
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $resultado = "Aprovado";
    } else {
        $resultado = "Reprovado";
    }


    return [
        'maiorNota' => $maiorNota,
        'menorNota' => $menorNota,
        'media' => $media,
        'situacao' => $resultado
    ];
}

$notas = array(7, 8, 9, 6, 10);

$resultado = calcularMedia($notas);

 echo "Maior nota: " . $resultado['maiorNota'] . "<br>";
echo "Menor nota: " . $resultado['menorNota'] . "<br>";
echo "Média: " . $resultado['media'] . "<br>";
echo "Situação: " . $resultado['situacao'] . "<br>";