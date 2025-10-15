<?php

$banco_de_dados = "jogos_db";
$servidor = "localhost";
$usuario = "root";
$senha = "";

$conecta_banco = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco_de_dados
);