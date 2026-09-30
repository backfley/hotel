<?php

require_once "conexao.php";

// Exemplo fixando cliente_id = 1 ou pegando do POST/Session se necessário
$cliente_id = 1;

$sql = "SELECT reservas.id, quartos.numero_quarto, quartos.tipo, quartos.preco, reservas.data_entrada, reservas.data_saida 
        FROM reservas 
        JOIN quartos ON reservas.quarto_id = quartos.id 
        WHERE reservas.cliente_id = '$cliente_id'";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Reservas</title>
</head>
<body>

    <h2>Minhas Reservas</h2>
    <a href="listar_hoteis.php">Voltar para lista de hotéis</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nº Quarto</th>
            <th>Tipo</th>
            <th>Preço</th>
            <th>Data Entrada</th>
            <th>Data Saída</th>
        </tr>

        <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['numero_quarto']; ?></td>
                <td><?php echo $linha['tipo']; ?></td>
                <td>R$ <?php echo $linha['preco']; ?></td>
                <td><?php echo $linha['data_entrada']; ?></td>
                <td><?php echo $linha['data_saida']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>