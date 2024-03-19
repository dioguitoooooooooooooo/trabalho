<?php
include ('liga_bd.php');
$id_produto=$_POST["id_produto"];
$nome = $_POST["nome"];
$categoria=$_POST["categoria"];
$preco = $_POST["preco"];
$url_imagem = $_POST["url_imagem"];

if($id_produto=="" or $nome=="" or $categoria=="" or $preco=="" or $url_imagem="")
{
	header("Location: listar.php?erro=1");
	}
	else
	{
		$sql="SELECT * FROM produtos WHERE id_produto='$id_produto'";
		$encontra = mysqli_query($liga_bd, $sql);
		if(mysqli_num_rows($encontra)<>0)
		{
			header("Location: listar.php?erro=2");
		}
		else
		{
			mysqli_query($liga_bd, "INSERT INTO produtos (id_produto, nome, categoria, preco, url_imagem) VALUES
			('$id_produto', '$nome','$categoria','$preco','$url_imagem')");
			mysqli_close($liga_bd);
			header("Location: listar.php");
		}
	}
?>