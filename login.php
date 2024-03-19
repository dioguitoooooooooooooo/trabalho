<html>
<style>
body {
	font-family:Century Gothic;
	font-size:20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    margin: 0;
	background-color:#8B4513;
	padding: 0;
	background: url('sala2.jpg') no-repeat center center fixed;
	background-size: cover;
	
}
		.navbar {
      background-color:#8B4513;
	  box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5), 0 0 10px 5px rgba(0, 0, 0, 0.3) inset;
      overflow: hidden;
	  color: white;
	  position: fixed;
	  font-family: broadway;
	  width: 100%;
	  display: flex;
      justify-content: space-between;
		top:0%;
      z-index: 1;

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

.box:hover {
  transform: scale(1.1);
}

.font{
	font-family: Century Gothic;
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
}

td {
    padding: 5px;
}

input[type="text"], input[type="number"] {
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
	font-size:17px;
}
@media only screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                height: auto;
            }
</style>

<body>
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


	<div class="login">
<form action="login.php" method="post">
<h2 align="center">Entrar</h2>
<div class="font">
<table>
	<tr><td>Email:</td><td><input type="text" name="email"> </td></tr>
	<tr><td>Palavra-Passe:</td><td><input type="text" name="pass"></td></tr>
		
	</table>
	<br><a href="inicio.php"><input type="submit" class="botaoflu" value="Entrar"></a><br><br>
<?php
include("liga_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    if ($email === "tabuasadmin4620@hotmail.com" && $pass === "admintabuas") {
        header("Location: listar.php");
        exit();
    } else {
 
        $sql = "SELECT * FROM registar WHERE email = '$email' AND pass = '$pass'";
        $resultado = mysqli_query($liga_bd, $sql);

        if ($resultado) {

            if ($row = mysqli_fetch_assoc($resultado)) {

                header("Location: inicio.php");
                exit();
            } else {

                echo "<h6>E-mail e Palavra-Passe não existem. Crie uma nova conta</h6>";
            }
        } else {
            
            echo "Erro na consulta SQL. <a href='inicio.php'>Voltar</a>";
        }
    }
}
?>

<!-- Botão "Criar Conta" sempre visível -->
<a href='ler_dados.php'><input type='button' class='botaoflu' value='Criar Conta'></a>


	

		
</form>
</div>
</div>
</div>
</body>
<script>
  function irParaPagina(destino) {
    window.location.href = destino;
  }

	function abrirNav() {
    document.getElementById("navertical").style.width = "325px";
  }

  function fecharNav() {
    document.getElementById("navertical").style.width = "0";
  }

</script>
</html>