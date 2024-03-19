<html>
<head>
<title>Cardapio - Bebidas</title>
</head>
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
<br><br><br><br><br><br>
<center>
<a href="inicio.php"><img src="otabuas.png" width=300 height=198> </a>
</center>
<br><br>

<?php
include('liga_bd.php');

$sql = "SELECT * FROM produtos WHERE categoria='Bebidas'";
$resultado = mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);

echo '<div class="caixa-empilhada">';

while ($registo = mysqli_fetch_array($resultado)) {
    echo "<div class='produto-box'>";
    echo "<div class='produto'>
            <img src='" . $registo['url_imagem'] . "'target='_blank'>
            <p>" . $registo['nome'] . "</p>
            <p>Preço: " . $registo['preco'] . "</p>
          </div>";
    echo "</div>";
}

echo "</div>";
?>
<div class="caixa-botao">
  <input type="button" onclick="irParaPagina('massas.php')" value="<<">
  <input type="button" onclick="irParaPagina('menudia.php')" value=">>">
</div>
<br>
<style>
 body {
            margin: 0;
            padding: 0;
            font-family: Century Gothic;
			font-size:20px;
			background-color:#F1F1F1;
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
      align-items: center;
      z-index: 1;
	  background:cover;
	  text-align:center;
    }
.navbar img {
	justify-content:center;
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

.caixa-empilhada {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
   padding:150px;
}

.produto-box {
  flex: 1;
  text-align: center;
  padding: 10px; 
  border: 1px solid #ddd;
  margin-right:13px;
  margin-top:13px;
}

.produto {
  display: flex;
  flex-direction: column; 
  padding: 10px;
}

.produto-box:hover {
  transform: scale(1.1);
}

.produto img {
  height: 100px;
}
.caixa-botao {
      display: flex;
      justify-content: space-between;
      width: 200px;
	height:100px;
      margin: 0 auto;
    }

    input[type="button"] {
      width: 48%;
      background-color: #B4965E;
      color: #fff; 
      border: none;
      padding: 10px;
      cursor: pointer;
	  font-size:30px;
    }
	.font{
	font-size:20px;
	font-family;Century Gothic;
	}
	@media only screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                height: auto;
            }
</style>
</body>
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
    
	<p>Caracteristicas:<br>Take away<br>Acessivel a cadeira de rodas</p><br>

	<p>Siga-nos nas redes sociais</p>
      <a href="https://www.facebook.com/otabuas.lousada/?locale=pt_BR"><img src="face.png"></a>
      <a href="https://www.instagram.com/otabuaslousada/"><img src="insta.png"></a>
      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
</div>
 
</div>
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