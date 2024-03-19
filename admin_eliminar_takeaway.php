<?php
include('liga_bd.php');

if (isset($_GET['telefone_cliente'])) {
    $telefone_cliente = $_GET['telefone_cliente'];

    $telefone_cliente = mysqli_real_escape_string($liga_bd, $telefone_cliente);

    $sql = "DELETE FROM takeaway2 WHERE telefone_cliente = '$telefone_cliente'";

    if (mysqli_query($liga_bd, $sql)) {
        echo "<p>Takeaway com o numero de Telefone'$telefone_cliente' foi eliminada com sucesso!";
	echo "<a href='listar.php'><input type='button' class='botaoflu' value='Voltar'></a>";
    } else {
        echo "<p>Erro ao eliminar a reserva: " . mysqli_error($liga_bd);
    }
    mysqli_close($liga_bd);
    exit;
} else {
    echo "<p>Código do takeaway não fornecido.";
echo "<a href='listar.php'><input type='button' class='botaoflu' value='Voltar'></a>";
    exit;
}
?>