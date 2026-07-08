<?php
function calcularDesconto(){
    if ($valortotal > 1000) {
        $desconto = 0.30;
    } elseif ($valortotal > 500) {
        $desconto = 0.20;
    } elseif ($valortotal > 100) {
        $desconto = 0.10;
    } else {
        $desconto = 0;
    }
    return $valortotal * $desconto;

    echo "O valor do desconto é: " . calcularDesconto();
}
