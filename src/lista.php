<?php

require "conecta.php";

$sql = "SELECT * FROM jogos";

$lista_jogos = $conecta_banco->query($sql)->fetch_all();