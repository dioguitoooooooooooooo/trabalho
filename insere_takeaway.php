<?php
include('liga_bd.php');

$nome_cliente = $_POST['nome_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$data_pedido = $_POST['data_pedido'];
$pedido = $_POST['pedido'];
$quantidade = $_POST['quantidade'];
$outro_prato = $_POST['outro_prato'];
$bebidas = $_POST['bebidas'];
$quantidade_bebida= $_POST['quantidade_bebida'];
$outro_bebida = $_POST['outro_bebida'];



if ($nome_cliente == "" || $telefone_cliente == "" || $data_pedido == "" || $pedido == "" || $quantidade == "" || $outro_prato == "" || $outro_bebida == "") {
    header("Location: takeaway.php?erro=1");
} else {
    $nome_cliente = mysqli_real_escape_string($liga_bd, $nome_cliente);
    $sql_cliente_existente = "SELECT * FROM takeaway2 WHERE nome_cliente = '$nome_cliente'";
    $encontra_cliente = mysqli_query($liga_bd, $sql_cliente_existente);

    if (mysqli_num_rows($encontra_cliente) != 0) {
        header("Location: takeaway.php?erro=2");
    } else {
        $sql_inserir_takeaway = "INSERT INTO takeaway2 (nome_cliente, telefone_cliente, data_pedido) VALUES
                                ('$nome_cliente', '$telefone_cliente', '$data_pedido')";
        mysqli_query($liga_bd, $sql_inserir_takeaway);

        
        $id_pedido = mysqli_insert_id($liga_bd);

        $sql_inserir_itenspedido = "INSERT INTO itenspedido2 (pedido, quantidade, outro_prato, bebidas, quantidade_bebida,outro_bebida) VALUES
                                    ('$pedido', '$quantidade', '$outro_prato','$bebidas','$quantidade_bebida','$outro_bebida')";
        mysqli_query($liga_bd, $sql_inserir_itenspedido);

        mysqli_close($liga_bd);
        header("Location: takeaway.php");
    }
}
?>
