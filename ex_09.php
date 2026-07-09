<?php

function analisarNumero($numero){
    
    $parOuimpar = ($numero % 2 == 0) ? "Par" : "Ímpar";

    $primo = true;
    if ($numero <= 1) {
        $primo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $numeroPrimo = $primo ? "É primo" : "Não é primo";

    $somaDivisores = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }
    $numeroPerfeito = ($somaDivisores == $numero) ? "É perfeito" : "Não é perfeito";

    return [$parOuimpar, $numeroPrimo, $numeroPerfeito];
}