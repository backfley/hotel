<?php

require_once "conexao.php";

$hotel_id = $_POST['hotel_id'] ??'';
$numero = $_POST['numero'] ?? '';
$tipo = $_POST['tipo'] ??'';
$preco_diaria = $_POST['preco_diaria'] ??'';

$sql = "SELECT * FROM quartos";

resultado = mysqli_query(
    $conexao,
    $sql
);


while( $linha = mysqli_fetch_assoc($resultado)){

    if ($linha['hotel_id'] == $hotel_id){
        echo "Número do quarto:".$linha['numero'];
        echo "Tipo do quarto:".$linha['tipo'];
        echo "Preço do quarto:".$linha['preco_diaria'];

    } else{
        echo "Quarto não encontrado";
    }
    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listarquartos.com.br</title>
</head>
<body>
    <br><br>
        <a href="">Cadastrar novo quarto</a>
</body>
</html>