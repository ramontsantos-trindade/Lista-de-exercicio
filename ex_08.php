<?php
function ordenarNomes(){
    $nomes = array("João", "Maria", "Pedro", "Ana", "HOMOERECTUS");
    sort($nomes);
    return $nomes;

    print_r($nomes);
    
}                                               

echo "Nomes ordenados: <br>";
$nomesOrdenados = ordenarNomes($nomes);
print_r($nomesOrdenados);