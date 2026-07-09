<?php

function formatarTexto($texto) {

    $maiusculas = strtoupper($texto);
    $minusculas = strtolower($texto);
    $cadauma = ucwords($texto);
    $tamanhao = strlen($texto);

    echo "Maiúsculas: " . $maiusculas . "<br>";
    echo "Minúsculas: " . $minusculas . "<br>";
    echo "Cada palavra com a primeira letra maiúscula: " . $cadauma . "<br>";
    echo "Tamanho do texto: " . $tamanhao . "<br>";
}

formatarTexto("its better to burn out than than fade away");