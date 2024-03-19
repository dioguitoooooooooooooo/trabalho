<?php
include ('liga_bd.php');
$nome = $_POST["nome"];
$rating = $_POST["rating"];
$comentario = $_POST["comentario"];


if($nome=="" or $rating=="" or $comentario=="")
{
	header("Location: ler_dados1.php?erro=1");
	}
	else
	{
		$sql="SELECT * FROM avaliar WHERE nome='$nome'";
		$encontra = mysqli_query($liga_bd, $sql);
		if(mysqli_num_rows($encontra)<>0)
		{
			header("Location: ler_dados1.php?erro=2");
		}
		else
		{
			mysqli_query($liga_bd, "INSERT INTO avaliar (nome, rating, comentario) VALUES
			('$nome','$rating','$comentario')");
			mysqli_close($liga_bd);
			header("Location: ler_dados1.php");
		}
	}
?>