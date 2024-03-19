<html>
<body>
<nav class="navbar">
<a href="inicio.php"><img src="otabuas.png" height="68" width="100"></a>
  <ul>
  <li><a href="inicio.php">Inicio</a></li>
    <li><a href="Menu.php">Cardapio</a></li>
    <li><a href="ler_dados1.php">Avalie-nos</a></li>
    <li><a href="contacto.php">Contacte-nos</a></li>
	<li class="dropdown">
             <button class="dropdown-btn">Take-Away | Reservas &#9660;</button>
            <div class="dropdown-content">
                <a href="takeaway.php">Take-Away</a>
                <a href="Reservar.php">Reservas</a>
            </div>
        </li>
		<li><a href="login.php"><img src="user.png" height="48" width="60"></a></li>
  </ul>											
</nav>
<br><br><br><br><br><br>
<center>
<a href="inicio.php"><img src="otabuas.png" width=300 height=198> </a>
</center>
<br><br>

<?php
include('liga_bd.php');

$sql = "SELECT * FROM categoria";
$resultado = mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);

echo '<div class="caixa-empilhada">';

while ($registo = mysqli_fetch_array($resultado)) {
    echo "<div class='produto-box'>";
   echo "<a href='pagina_categoria.php?categoria=" . $nome . "' class='produto-link'>";
    echo "<div class='produto'>
        <img src='" . $registo['url_imagem'] . "' target='_blank'>
        <p>" . $registo['nome'] . "</p>
      </div>";
    echo "</a>";
    echo "</div>";
}

echo "</div>";
?>
?>
<style>
 body {
            margin: 0;
            padding: 0;
            font-family: broadway;
			font-size:20px;
			background-color:#F1F1F1;
        }
		.navbar {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height:9%;
				background-color: #8B4513;
				box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5), 0 0 10px 5px rgba(0, 0, 0, 0.3) inset;
				color: white;
				display: flex;
				justify-content: space-between;
				align-items: center;
				z-index: 1000;
				font-family: broadway;
			}
			.navbar ul {
				list-style: none;
				margin: 0;
				padding: 0;
				display: flex;
			}

			.navbar li {
				margin-right: 30px;
			}

			.navbar a {
				text-decoration: none;
				color: white;
				transition: color 0.7s ease, background-color 0.7s ease; 

}
.navbar img{
margin-left:40px;
}

.navbar a:hover {
    color: black;
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

		.dropdown {
            display: inline-block;
        }
		.dropdown-btn {
            background-color: #B39D70;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
			font-family: broadway;
			font-size:15px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
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
	font-family;arial;
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
</script>
</html>