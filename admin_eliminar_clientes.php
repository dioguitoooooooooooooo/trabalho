<?php
include('liga_bd.php');
$apagar=$_GET['cod'];
$sql="DELETE FROM registar WHERE cod LIKE '$apagar'";
mysqli_query($liga_bd, $sql);
echo"<p>Registo apagado com sucesso!";
echo "<a href='listar.php'><input type='button' class='botaoflu' value='Voltar'></a>";
mysqli_close($liga_bd);
exit;
?>
