<?php
$liga_bd = mysqli_connect("localhost","root") or die ("Não foi possivel conectar");
if(mysqli_connect_errno())
{
	echo "Não foi possivel ligar ao servidor" . mysqli_connect_error();
}
else
{
	$escolher_bd=mysqli_select_db($liga_bd, "restaurante_tabuas");
	if(!$escolher_bd)
	{
		echo "Erro na ligação á base de dados";
	}
}
?>