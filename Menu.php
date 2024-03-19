<html>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: broadway;
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
.box:hover {
  transform: scale(1.1);
}

input[type="text"], input[type="password"] {
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
}
.caixa {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
}

.font{
	font-family: arial;
}


.caixa {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  margin: 0 auto; 
  padding-bottom:240px;
  justify-content: center; 
  width:250px;
height:135px;
}
.box {
  flex: 1;
  text-align: center;
  padding: 30px; 
  border: 1px solid #ddd;
  margin-right:13px;
  margin-top:13px;
}
.box:hover {
  transform: scale(1.1);
}


.container {
  position: relative;
  width: 380px;
  height: 235px;
  overflow: hidden;
  opacity: 1;
  transition: opacity 1s ease-in-out;
}

.container:hover .meio {
  opacity: 1;
}
container:hover img{
	opacity:0.2;
}
.meio {
  transition: opacity 0.5s ease-in-out;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  opacity: 0;
}

.text {
  color: black;
  font-size: 24px;
}
a{
	text-decoration:none;
}
.container img {
  opacity: 1;
  transition: opacity 0.5s ease-in-out;
}

.container:hover img {
  opacity: 0.2;
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
<center>
			<br><br><br><br><br><br><br><a href="inicio.php"><img src="otabuas.png" width=300 height=198> </a>	
	</center>
<div class="font">
<center>
<br><br><br><br><b>Cada categoria que lhe fornecemos é uma promessa de sabor e prazer. Explore e descubra!</b>
<hr>
</center>
<div class="caixa">
	<a href="pastelaria.php">
  <div class="box">
		<div class="container">
			<img src="pqn_almoco.jpg" alt="Imagem 1" width="280px" height="235px">
				<div class="meio">
					<div class="text">Pastelaria</div>
				</div>
		</div>
	</div>
	</a>
  <a href="pizzaria.php">
  <div class="box">
		<div class="container">
			<img src="pizzaria.jpeg" alt="Imagem 1" width="280px" height="235px">
				<div class="meio">
					<div class="text">Pizzaria</div>
				</div>
		</div>
	</div>
	</a>
  <a href="snacks.php">
  <div class="box">
		<div class="container">
			<img src="snacks.jpeg" alt="Imagem 1" width="280px" height="235px">
				<div class="meio">
					<div class="text">Snacks</div>
				</div>
		</div>
	</div>
	</a>
  </div>
  <div class="caixa">
  <a href="massas.php">
  <div class="box">
		<div class="container">
			<img src="faia.jpeg" alt="Imagem 1" width="280px" height="235px">
				<div class="meio">
					<div class="text">Massas</div>
				</div>
		</div>
	</div>
	</a>
  <a href="bebidas.php">
  <div class="box">
		<div class="container">
			<img src="cola-limao.jpg" alt="Imagem 1" width="280px" height="235px">
				<div class="meio">
					<div class="text">Bebidas</div>
				</div>
		</div>
	</div>
	</a>
  <a href="menudia.php">
  <div class="box">
		<div class="container">
			<img src="faia-ter.jpeg" alt="Imagem 1" width="240px" height="235px">
				<div class="meio">
					<div class="text">Menu do dia</div>
				</div>
		</div>
	</div>
	</a>
  </div>
  <div class="caixa">
  <a href="sobremesas.php">
  <div class="box">
		<div class="container">
			<img src="bolo_bolacha.jpg" alt="Imagem 1" width="380px" height="235px">
				<div class="meio">
					<div class="text">Sobremesas</div>
				</div>
		</div>
	</div>
	</a>
  </div>
  </div>
  <br><br><br><br><br>
</body>

<div class="footer">
    <div class="footer-column">
    <p>Restaurante - O Tabuas</p>
    <p>R. Palmira Meireles 643, Lousada, Porto, Portugal</p>
    <p>Telefone: 913 351 497</p>
	<br><br>
	<p>Horário de Funcionamento</p>
    <p>Segunda a domingo: 8:00 - 00:00</p>
    </div>
    <div class="footer-column">
    
	<p>Caracteristicas:<br>Take away<br>Acessivel a cadeira de rodas</p><br>

	<p>Siga-nos nas redes sociais</p>
      <a href="https://www.facebook.com/otabuas.lousada/?locale=pt_BR"><img src="face.png"></a>
      <a href="https://www.instagram.com/otabuaslousada/"><img src="insta.png"></a>
      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
</div>
  
</div>
<script>
	function abrirNav() {
    document.getElementById("navertical").style.width = "325px";
  }

  function fecharNav() {
    document.getElementById("navertical").style.width = "0";
  }
	</script>
</html>