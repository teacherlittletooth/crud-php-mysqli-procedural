<?php
//Recebendo dados enviados via POST
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nome_do_jogo = $_POST["jogo"];
    
    require "conecta.php";

    $sql = "INSERT INTO jogos(nome_jogo) VALUES('$nome_do_jogo')";

    $conecta_banco->query($sql);

    header("location: ../index.php");
} else {
    header("location: ../index.php");
}