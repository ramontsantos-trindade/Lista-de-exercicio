<?php
function criptografarMensagem($texto){

$deslocamento = 3;
$resultado = "";

for ($i = 0; $i < strlen($texto); $i++) {
    $resultado .= chr(ord($texto[$i]) + $deslocamento);
    
}

return $resultado;

}

function descriptografarMensagem($texto){

$deslocamento = 3;
$resultado = "";

for ($i = 0; $i < strlen($texto); $i++) {
    $resultado .= chr(ord($texto[$i]) - $deslocamento);

}
return $resultado;
}

$mensagem = "Goodbye, World!";

$Criptografada = criptografarMensagem($mensagem);
$Descriptografada = descriptografarMensagem($Criptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $Criptografada . "<br>";
echo "Mensagem descriptografada: " . $Descriptografada . "<br>";
