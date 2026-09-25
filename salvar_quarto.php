<?php

require_once "conexao.php";

$hotel_id = $_POST['hotel_id'] ??'';
$numero = $_POST['numero'] ?? '';
$tipo = $_POST['tipo'] ??'';
$preco_diaria = $_POST['preco_diaria'] ??'';

$sql = "INSERT INTO quartos (hotel_id,numero,tipo,preco_diaria,disponivel) VALUES ($hotel_id, $numero, '$tipo', '$preco_diaria', 1)";

if (mysqli_query($conexao, $sql)) {
    echo "<h3>Cadastro realizado com sucesso! </h3>";
} else {
    echo " Erro 404 ";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fimdocadastro.com.br</title>
</head>
<body>
        <br><br>
        <a href="cadastrar_quarto.html">Clique aqui para cadastrar outro quarto</a>

</body>
</html>