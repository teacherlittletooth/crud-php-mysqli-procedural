<?php

if( isset( $_GET["cod"] ) ) {
    $cod = intval( $_GET["cod"] );

    require "conecta.php";

    $sql = "DELETE FROM jogos WHERE cod_jogo = $cod";

    $conecta_banco->query($sql);

    header("location: ../index.php");
} else {
    header("location: ../index.php");
}