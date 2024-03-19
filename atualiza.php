<?php
include ('liga_bd.php');

$nome=$_POST['nome'];
$apelido=$_POST['apelido'];
$idade=$_POST['idade'];
$telefone=$_POST['telefone'];
$morada=$_POST['morada'];
$utilizador=$_POST['utilizador'];
$email=$_POST['email'];
$pass=$_POST['pass'];

/*
echo $codigo;
echo $email;
echo $nome;
echo $idade;
echo $turma;
echo $ano;
echo $utilizador;
echo $pass1;
*/

session_start();
$codigo=$_SESSION['cod'];

$sql="UPDATE registar SET cod='$codigo',nome='$nome', apelido='$apelido', idade='$idade', telefone='$telefone', utilizador='$utilizador',
morada='$morada',email='$email', pass='$pass' WHERE cod='$codigo'";
mysqli_query($liga_bd, $sql);
echo "<p>Atualizado com sucesso</p>";
echo "<a href='listar.php'>Voltar</a>";
?>