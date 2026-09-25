<?php

require_once "conexao.php";

id_cliente = $_POST['id_cliente'] ??'';
id_quarto = $_POST['id_quarto'] ??'';
data_entrada = $_POST['data_entrada'] ??'';
data_saida = $_POST['data_saida'] ??'';

$sql = "INSERT INTO reservas (id_cliente, id_quarto, data_entrada, data_saida) VALUES ('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida')";

$resultado = mysqli_query(
    $conexao,
    $sql
);

if (mysqli_query($conexao, $sql)) {
    echo "<h3>Cadastro realizado com sucesso! </h3>";
    echo "<a href=''>Ver Minhas Reservas</a>";
} else {
    echo " Erro 404 ";
    echo "<a href='ver_quartos.php'>Voltar</a>"
}
?>