<?php
include('liga_bd.php');

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];

    $nome = mysqli_real_escape_string($liga_bd, $nome);

    $sql = "DELETE FROM produtos WHERE nome = '$nome'";

    if (mysqli_query($liga_bd, $sql)) {
        echo "<p>Produto '$nome' eliminado com sucesso!";
		echo "<a href='listar.php'><input type='button' value='Voltar'></a>";
    } else {
        echo "<p>Erro ao eliminar o produto: " . mysqli_error($liga_bd);
    }

    mysqli_close($liga_bd);
    exit;
} else {
    echo "<p>Nome do produto não fornecido.";
	echo "<a href='listar.php'><input type='button' value='Voltar'></a>";
    exit;
}
?>