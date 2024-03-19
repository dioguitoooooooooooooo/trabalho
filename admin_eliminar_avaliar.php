<?php
include('liga_bd.php'); 

if (isset($_GET['cod'])) {
    $id_rating = $_GET['cod'];

    $sql = "DELETE FROM avaliar WHERE id_rating = '$id_rating'";

    if (mysqli_query($liga_bd, $sql)) {
        echo "<p>A avaliação com o ID '$id_rating' foi eliminada com sucesso!";
echo "<a href='listar.php'><p><input type='button' class='botaoflu' value='Voltar'></p></a>";
    } else {
        echo "<p>Erro ao eliminar o ID: " . mysqli_error($liga_bd);
    }

    mysqli_close($liga_bd);
    exit;
} else {
    echo "<p>ID não fornecido.";
echo "<a href='listar.php'><p><input type='button' class='botaoflu' value='Voltar'></p></a>";
    exit;
}
?>