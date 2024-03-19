<?php
include('liga_bd.php');

$id_pedido = $_POST['id_pedido'];
$pedido = $_POST['pedido'];
$quantidade = $_POST['quantidade'];

if ($pedido == "" || $quantidade == "") {
    header("Location: ler_dados.php?erro=1");
} else {

    $sql = "SELECT * FROM registar WHERE id_pedido = '$id_pedido'";
    $encontra = mysqli_query($liga_bd, $sql);

    if (mysqli_num_rows($encontra) != 0) {
        header("Location: ler_dados.php?erro=2");
    } else {

        $sql_inserir = "INSERT INTO itenspedido (pedido, quantidade) VALUES ('$pedido', '$quantidade')";
        mysqli_query($liga_bd, $sql_inserir);

        mysqli_close($liga_bd);
        header("Location: takeaway.php");
    }
}
?>