<html>
<head>
<title>Registe-se</title>
</head>
<body>
<style>
body {
    font-size: 20px;
    margin: 0;
    padding: 0;
    font-family: Century Gothic;
	background-color:#E1D9CE;
}

.navbar {
    background-color: #8B4513;
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5), 0 0 10px 5px rgba(0, 0, 0, 0.3) inset;
    overflow: hidden;
    color: white;
    position: fixed;
    font-family: broadway;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1;
    background: cover;
    text-align: center;
	top:0%;
}

.navbar img {
    justify-content: center;
    margin: 0 auto;
}

.navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    color: black;
}

.abrirnav {
    font-size: 30px;
    cursor: pointer;
    background-color: #8B4513;
    color: white;
    border: none;
    padding: 10px 15px;
}

.navertical {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 2;
    top: 0;
    right: 0;
    background-color: #8B4513;
    overflow-x: hidden;
    transition: 1.0s;
    padding-top: 60px;
}

.navertical a {
    padding: 12px 12px 12px 32px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 1.0s;
}

.navertical a:hover {
    color: #B39D70;
}

.fechar {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.font {
    font-family: arial;
}

.login {
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f4f4f4;
}

h2 {
    color: #333;
}

table {
    width: 100%;
	text-align:center;
}

td {
    padding: 5px;
	font-weight:bold;
}

input[type="text"],
input[type="number"],
input[type="submit"],
input[type="datetime-local"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}

.botaoflu:hover {
    background-color: #4C4C4C;
}

.botaoflu {
    background-color: #B39D70;
    color: white;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 17px;
}

.caixa {
    width: 650px;
    margin: 100px auto;
    border-radius: 10px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	padding:15px;
	background-color:#F3F3F3;
	
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2 {
    text-align: center;
    color: #333;
}

label {
    margin-top: 10px;
    color: #555;
}

input[type="submit"] {
    background-color:#B39D70;;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #4C4C4C;
}

.font {
    font-size: 18px;
    font-family: Century Gothic;
    font-weight: bold;
}
.footer{
    background-color: #8B4513;
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5), 0 0 10px 5px rgba(0, 0, 0, 0.3) inset;
	color: #fff;
	padding: 30px 0;
    display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}

.footer p {
  margin: 0;
}
</style>
  <div class="navbar">
	<a href="inicio.php"><img src="otabuas.png" class="tabuas" height="68" width="100"></a>
  <button class="abrirnav" onclick="abrirNav()">☰ </button>
</div>

<div id="navertical" class="navertical">
  <a href="javascript:void(0)" class="fechar" onclick="fecharNav()">×</a>
  <a href="inicio.php">🏡 | Inicio</a>
  <a href="Menu.php">📜 | Cardapio</a>
  <a href="ler_dados1.php">⭐ | Avalie-nos</a>
  <a href="contacto.php">📞 | Contacte-nos</a>
  <a href="takeaway.php">📦 | Take-Away</a>
  <a href="Reservar.php"> 🪑 | Reservas</a>
  <a href="login.php"><img src="user.png" height="48" width="60"></a>
</div>

<div class="caixa">
<h2 align="center">Registe-se</h2>
<div class="font">
<form action="insere_cliente.php" method="post">
<table>
	<tr><td>Nome:</td><td><input type="text" name="nome"></td>
	<td>Apelido</td><td><input type="text" name="apelido"></td></tr>
	<tr><td>Idade:</td><br><td><input type="number" name="idade"></td>
	<td>Telefone:</td><td><input type="text" name="telefone" maxlength="9"></td></tr>
	<tr><td>Morada:</td><td><input type="text" name="morada"></td>
	<td>Nome de utilizador:</td><td><input type="text" name="utilizador" maxlength="20"></td></tr>
	<tr><td>Email:</td><td><input type="text" name="email"></td>
	<td>Palavra-passe:</td><td><input type="password" name="pass"></tr></td>
<?php
include("liga_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $morada = $_POST["morada"];
    $utilizador = $_POST["utilizador"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];


    $sql_verificar = "SELECT * FROM outra_tabela WHERE email = '$email'";
    $resultado_verificar = mysqli_query($liga_bd, $sql_verificar);

    if ($resultado_verificar && mysqli_num_rows($resultado_verificar) > 0) {
        echo "<h6>E-mail já está em uso. Por favor, use outro e-mail</h6>";
    } else {
        $sql_inserir = "INSERT INTO registar (nome, apelido, idade, telefone, morada, utilizador, email, pass) VALUES ('$nome', '$apelido', '$idade', '$telefone', '$morada', '$utilizador', '$email', '$pass')";
        $resultado_inserir = mysqli_query($liga_bd, $sql_inserir);

        if ($resultado_inserir) {
            header("Location: sucesso.php");
            exit();
        } else {
            echo "Erro ao inserir dados. <a href='inicio.php'>Voltar</a>";
        }
    }
}
?>
	<tr><td colspan=2><a href="login.php"><input type="submit" class="botaoflu" value="Criar Conta"></a></td>
	<td colspan=2><input type="button" name="pagina1" value="Limpar Formulario" class="botaoflu"></td></tr>
	<tr><td colspan=4><a href="login.php"><input type="button" name="pagina1" value="Voltar" class="botaoflu"></a></td></tr>
	</table>
	</form>
</div>
</div>


</body>
<script>
	function abrirNav() {
    document.getElementById("navertical").style.width = "325px";
  }

  function fecharNav() {
    document.getElementById("navertical").style.width = "0";
  }
	</script>
	<div class="footer">
        <div class="footer-coluna">
            <p>Restaurante - O Tabuas</p>
            <p>R. Palmira Meireles 643, Lousada, Porto, Portugal</p>
            <p>Telefone: 913 351 497</p>
            <br><br>
            <p>Horário de Funcionamento</p>
            <p>Segunda a domingo: 8:00 - 00:00</p>
        </div>
        <div class="footer-coluna">
            <p>Características:<br>Take away<br>Acessível a cadeira de rodas</p><br>

            <p>Siga-nos nas redes sociais</p>
            <a href="https://www.facebook.com/otabuas.lousada/?locale=pt_BR">
                <img src="face.png">
            </a>
            <a href="https://www.instagram.com/otabuaslousada/">
                <img src="insta.png">
            </a>
            <a href="#" class="instagram">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
</html>