<?php

require_once "conexao.php";

$id_hotel = $_POST['id_hotel'] ??'';
$numero_quarto = $_POST['numero_quarto'] ?? '';
$tipo = $_POST['tipo'] ??'';
$preco = $_POST['preco'] ??'';

$sql = "SELECT * FROM quartos";

$resultado mysqli_query($conexao,$sql);

hile( $linha = mysqli_fetch_assoc($resultado)){
    
    if ($linha['id_hotel'] == $id){
        echo "Número do quarto:".$linha['numero_quarto'];
        echo "Tipo do quarto:".$linha['tipo'];
        echo "Preço do quarto:".$linha['preco'];

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
    
</body>
</html>