<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estrelas = $_POST['estrelas'];

$sql = "INSERT INTO hoteis (nome, cidade, email, senha, estrelas) VALUES ('$nome', '$cidade', '$email', '$senha', '$estrelas')";

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
        <a href="login.html">Clique aqui para voltar</a>

</body>
</html>