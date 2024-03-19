<?php
session_start();

include('liga_bd.php');
$codigo = $_GET["cod"];
$sql="SELECT * FROM registar WHERE cod LIKE '$codigo'";
$resultado = mysqli_query($liga_bd, $sql);
$registo=mysqli_fetch_array($resultado);


$_SESSION['cod']=$codigo;
?>
<html>
<head><title>Editar Cliente</title></head>
<body>
	<form action="atualiza.php" method="POST">
	<h2>Registo do aluno</h2>
	<table border=2>
	<tr><td>Codigo:</td><td><input type="text" name="cod" value="<?php echo $registo["cod"]; ?>" disabled></td></tr>
	<tr><td>Nome:</td><td><input type="text" name="nome" value="<?php echo $registo["nome"]; ?>"></td></tr>
	<tr><td>Apelido:</td><td><input type="text" name="apelido" value="<?php echo $registo["apelido"]; ?>"></td></tr>
	<tr><td>Idade</td><td><input type="text" name="idade" value='<?php echo $registo["idade"]; ?>'></td></tr>
	<tr><td>Telefone:</td><td><input type="text" name="telefone" value='<?php echo $registo["telefone"]; ?>'></td></tr>
	<tr><td>Morada:</td><td><input type="text" name="morada" value='<?php echo $registo["morada"]; ?>'></td></tr>
	<tr><td>Nome de utilizador:</td><td><input type="text" name="utilizador" value='<?php echo $registo["utilizador"]; ?>'></td></tr>
	<tr><td>Email:</td><td><input type="text" name="email" value='<?php echo $registo["email"]; ?>'></td></tr>
	<tr><td>Palavra-passe:</td><td><input type="text" name="pass" value='<?php echo $registo["pass"]; ?>'></td></tr>
	
	<tr><td colspan=2><input type="submit" value=Continuar></td></tr>
</table>
</form>
</body>
</html>