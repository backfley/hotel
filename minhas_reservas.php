<?php
session_start();
require_once 'conexao.php';
// Verifica se o cliente está logado
if (!isset($_SESSION['id_cliente'])) {
    header("Location: login.php");
    exit;
}
$id_cliente = $_SESSION['id_cliente'];
// Consulta as reservas do cliente
$sql = "SELECT 
            reservas.id,
            quartos.numero_quarto,
            quartos.tipo,
            quartos.preco,
            reservas.data_entrada,
            reservas.data_saida
        FROM reservas
        JOIN quartos ON reservas.id_quarto = quartos.id
        WHERE reservas.id_cliente = '$id_cliente'";

$resultado = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
 <h1>Minhas Reservas</h1>
<?php if (mysqli_num_rows($resultado) > 0): ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número do Quarto</th>
                    <th>Tipo</th>
                    <th>Preço</th>
                    <th>Data de Entrada</th>
                    <th>Data de Saída</th>
                </tr>
            </thead>

             <tbody>
                <?php while ($reserva = mysqli_fetch_assoc($resultado)): ?>

                    <tr>
                        <td><?= $reserva['id'] ?></td>
                        <td><?= $reserva['numero_quarto'] ?></td>
                        <td><?= $reserva['tipo'] ?></td>
                        <td>R$ <?= number_format($reserva['preco'], 2, ',', '.') ?></td>
                        <td><?= date('d/m/Y', strtotime($reserva['data_entrada'])) ?></td>
                        <td><?= date('d/m/Y', strtotime($reserva['data_saida'])) ?></td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Você ainda não possui nenhuma reserva.</p>
    <?php endif; ?>
    <a href="listar_hoteis.php">Voltar para a lista de hotéis</a>

</body>
</html>