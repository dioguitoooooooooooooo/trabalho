<?php
include('liga_bd.php');

if (isset($_GET['cod'])) {
    $id_reserva = $_GET['cod'];

    $email = mysqli_real_escape_string($liga_bd, $id_reserva);

    $sql = "DELETE FROM reservar WHERE id_reserva = '$id_reserva'";

    if (mysqli_query($liga_bd, $sql)) {
        echo "<p>Reserva com o ID'$id_reserva' foi eliminada com sucesso!";
	echo "<a href='listar.php'><input type='button' class='botaoflu' value='Voltar'></a>";
    } else {
        echo "<p>Erro ao eliminar a reserva: " . mysqli_error($liga_bd);
    }

    mysqli_close($liga_bd);
    exit;
} else {
    echo "<p>Código da reserva não fornecido.";
echo "<a href='listar.php'><input type='button' class='botaoflu' value='Voltar'></a>";
    exit;
}
?>