<?php
include ('liga_bd.php');
$nome = $_POST["nome"];
$apelido = $_POST["apelido"];
$idade = $_POST["idade"];
$telefone = $_POST["telefone"];
$morada=$_POST["morada"];
$utilizador = $_POST["utilizador"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$sql_verificar = "SELECT * FROM registar WHERE email = '$email'";
$resultado_verificar = mysqli_query($liga_bd, $sql_verificar);

if ($resultado_verificar && mysqli_num_rows($resultado_verificar) > 0) {
        echo "<h2>E-mail já está em uso. Por favor, use outro e-mail ou inicie sessão!</h2>";
		echo "<a href='login.php'>Iniciar Sessão</a><br><br>";
		echo "<a href='ler_dados.php'>Voltar</a>";
		
    } else {
        $sql_inserir = "INSERT INTO registar (nome, apelido, idade, telefone, morada, utilizador, email, pass) VALUES ('$nome', '$apelido', '$idade', '$telefone', '$morada', '$utilizador', '$email', '$pass')";
        $resultado_inserir = mysqli_query($liga_bd, $sql_inserir);

        if ($resultado_inserir) {
            header("Location: login.php");
            exit();
        } else {
            echo "Erro ao inserir dados. <a href='inicio.php'>Voltar</a>";
        }
    }


?>
<style>
	h2{
		font-family:Century Gothic;
		text-align:center;
	}
</style>