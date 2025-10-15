<?php
//Recebendo dados enviados via POST
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nome_do_jogo = $_POST["jogo-edita"];
    $cod_do_jogo = $_POST["cod"];
    
    require "conecta.php";

    $sql = "UPDATE jogos SET nome_jogo = '$nome_do_jogo'
            WHERE cod_jogo = $cod_do_jogo";

    $conecta_banco->query($sql);

    header("location: ../index.php");
} else {
    header("location: ../index.php");
}