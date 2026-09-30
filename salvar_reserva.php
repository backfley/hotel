<?php

require_once "conexao.php";

$cliente_id = $_POST['cliente_id'] ?? '';
$quarto_id = $_POST['quarto_id'] ?? '';
$data_entrada = $_POST['data_entrada'] ?? '';
$data_saida = $_POST['data_saida'] ?? '';

$sql = "INSERT INTO reservas (cliente_id, quarto_id, data_entrada, data_saida) VALUES ('$cliente_id', '$quarto_id', '$data_entrada', '$data_saida')";

if (mysqli_query($conexao, $sql)) {
    echo "<h3>Cadastro realizado com sucesso! </h3>";
} else {
    echo " Erro 404 ";
}

?>
