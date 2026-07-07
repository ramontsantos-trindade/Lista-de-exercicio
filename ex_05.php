<?php
function  analisarTexto(){
    $texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    $tamanho = strlen($texto);
    $palavras = str_word_count($texto);
    $vogais = preg_match_all('/[aeiouAEIOU]/', $texto);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    echo "Texto: " . $texto . "<br>";
    echo "Tamanho: " . $tamanho . "<br>";
    echo "Número de palavras: " . $palavras . "<br>";
    echo "Número de vogais: " . $vogais . "<br>";
    echo "Número de consoantes: " . $consoantes . "<br>";
}
echo