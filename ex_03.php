<?php

function mascaraCpf($cpf){
    $mascararCpf = substr($cpf, 0, 0) . "***.***.***.**" . substr($cpf, -4);
    return $mascararCpf;
}

$cpf = "12345678910";

echo mascaraCpf($cpf);


