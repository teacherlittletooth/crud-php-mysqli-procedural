<?php
require "src/lista.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>

    <style>
        .botoes {
            cursor: pointer;
        }

        #form-edita {
            display: none;
        }
    </style>
</head>
<body>
    <form action="src/cadastra.php" method="post" id="form-cadastra">
        <h2>Cadastro de jogos</h2>
        <input type="text" name="jogo" id="jogo" placeholder="Nome do jogo" required>
        <input type="submit" value="Cadastrar">
    </form>

    <form action="src/edita.php" method="post" id="form-edita">
        <h2>Editar jogo</h2>
        <input type="hidden" name="cod" id="cod">
        <input type="text" name="jogo-edita" id="jogo-edita" placeholder="Nome do jogo" required>
        <input type="submit" value="Editar">
    </form>
    <hr>

    <?php if( count($lista_jogos) == 0 ) : ?>
        <h3>Nenhum jogo cadastrado</h3>
    <?php else : ?>

    <table>
        <thead>
            <th>COD</th>
            <th>JOGO</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach($lista_jogos as $jogo) : ?>
                <tr>
                    <td> <?= $jogo[0] ?> </td>
                    <td> <?= $jogo[1] ?> </td>
                    
                    <td class="botoes" onclick="excluir( <?= $jogo[0] ?>, '<?= $jogo[1] ?>' )"> ❌ </td>

                    <td class="botoes" onclick="alterar( <?= $jogo[0] ?>, '<?= $jogo[1] ?>' )"> 🖋️ </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php endif ?>

    <script>
        function excluir(id, jogo) {
            if( confirm( "Excluir o jogo " + jogo + "?" ) ) {
                window.location.replace("src/apaga.php?cod=" + id)
            }
        }

        function alterar(id, jogo) {
            document.getElementById("form-cadastra").style.display = "none"
            document.getElementById("form-edita").style.display = "block"
            document.getElementById("jogo-edita").value = jogo
            document.getElementById("cod").value = id
        }
    </script>

</body>
</html>