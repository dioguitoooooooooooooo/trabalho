<html>
<style>
body {
	font-family: Century Gothic;
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
	  box-shadow: 0 0 2px rgba(0, 0, 0, 0.5), 0 0 5px rgba(0, 0, 0, 0.3) inset;
      overflow: hidden;
	  color: white;
	  position: fixed;
	  font-family: broadway;
	  width: 100%;
	  display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1;
	  background:cover;
	  text-align:center;
	  top:0%;
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
	  align-items:right;
	  text-align:right
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
	border-bottom 1px solid #000
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
.avalia{
    width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f4f4f4;
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
<form action="insere_avalia.php" method="post">
<h2>Avalie-nos</h2>
<div class="font">
<h6>Faça como todos os nossos clientes e avalie-nos</h6>

<table>
	<tr><td>Nome:</td><td><input type="text" name="nome"> </td></tr>
	<tr><td>Avaliar em estrelas:</td><td><input type="number" min="0" max="5" name="rating"></td></tr>
		<tr><td>Comentario:</td><td><input type="text" name="comentario"></td></tr>
	</table><br><a href="inicio.php"><input type="submit" class="botaoflu"name="pagina2" value="Adicionar avaliação"><br></a><a href="login.php"><input type="submit" name="pagina1" value="Voltar" class="botaoflu"></a>
	
</div>
</form>
</div>
	<div class="avalia">
	<div class="font">
	<?php
include('liga_bd.php');

$sql="SELECT * FROM avaliar";
$resultado= mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);
echo '<table>';
while($registo = mysqli_fetch_array($resultado))
{
	echo "<tr>
			<td>".$registo['nome']."</td>
			<td> ➔".$registo['rating']."☆</td>
			<td>".$registo['comentario']."</td>

			</tr>";
}
echo "</table>";

?></div>
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
</html>