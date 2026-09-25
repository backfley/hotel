<?php

require_once "conexao.php";

$hotel_id = $_GET['hotel_id'] ??'';

$sql = "SELECT * FROM quartos WHERE hotel_id = '$hotel_id'";

$resultado = mysqli_query(
    $conexao,
    $sql
);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Quartos Disponíveis no Hotel Selecionado</h2>
    <table>
        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Preço</th>
        </tr>

<?php while($quarto = mysqli_fetch_assoc($resultado)){
    echo "<tr>
        <td>".$quarto['numero']."</td>
        <td>".$quarto['tipo']."</td>
        <td>".$quarto['preco_diaria']."</td>

    </tr>";
}
?>
    </tables>
    <h2>Preencha para reservar um quarto</h2>
    <form action="salvar_reserva.php" method="post">
        <label for="id_cliente">ID do cliente</label>
        <input type="number" id="id_cliente" name="id_cliente">
        <br><br>

        <label for="id_cliente">ID do Quarto</label>
        <input type="number" id="id_quarto" name="id_quarto">
        <br><br>

        <label for="id_cliente">DATA ENTRADA</label>
        <input type="number" id="data_entrada" name="data_entrada">
        <br><br>

        <label for="id_cliente">DATA SAIDA</label>
        <input type="number" id="data_saida" name="data_saida">
    </form>
</body>
</html>