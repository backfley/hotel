<?php

require_once "conexao.php";

$hotel_id = $_POST['hotel_id'] ??'';
$numero = $_POST['numero'] ?? '';
$tipo = $_POST['tipo'] ??'';
$preco_diaria = $_POST['preco'] ??'';

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria) VALUES ('$hotel_id', '$numero', '$tipo', '$preco_diaria')";

if(mysqli_query($conexao,$sql)){
    echo "<br>Cadastro realizado com sucesso!";
} else {
    echo "Erro 404";
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