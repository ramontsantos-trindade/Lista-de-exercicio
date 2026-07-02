<?php
function inverterTexto()
{
    $texto = "League of Legends";
    $textoInvertido = strrev($texto);
    return $textoInvertido;

    
}
echo inverterTexto();
echo mb_strlen(inverterTexto());
