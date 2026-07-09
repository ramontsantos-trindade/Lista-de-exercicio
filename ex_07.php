<?php
<<<<<<< HEAD

function calcularDesconto($valor){

if ($valor < 500){
    return "Sem Desconto";
}

else if ($valor < 500){
    return $valor - ($valor * 0.01); 
}

else if ($valor < 1000){
    return $valor - ($valor * 0.02); 
}

else if ($valor < 1000){
    return $valor - ($valor * 0.3); 
}

}

$valor = 550;

echo "Valor original: " . $valor . "<br>";
echo "Valor com desconto: " . calcularDesconto($valor);

