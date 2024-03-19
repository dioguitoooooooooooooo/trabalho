<html>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Century Gothic;
            font-size: 20px;
            background-color: #F1F1F1;
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
        header {
            position: relative;
            background: url('sala2.jpg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
			background:cover;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
			background:cover;
        }

        h1 {
            z-index: 1;
            font-size: 30px;
        }

		
        header {
              position: relative;
			  background: url('sala2.jpg') center/cover no-repeat;
			  height: 100vh;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  color: #fff;
			  text-align: center;
			  background:cover;
        }
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); 
        }

        h1 {
            z-index: 1;
			font-size:30px;
        }
		
		.infoimagem {
            text-align: center;
        }
        .infoimagem img {
            margin: 10px;
			 width: 200px;
            height: auto;
        }
		.footer{
    background-color: #8B4513;
    box-shadow:10px;
	color: #fff;
	padding: 30px 0;
    display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}

.footer p {
  margin: 0;
}


input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	margin-left:150px;
	margin-right:150px;
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
	align-items:center;
}
.caixa {
    display: flex;
    max-width: 1600px;
    margin: 0 auto;
	margin-left:150px;
	margin-right:150px;
}

.caixa-imagem-l {
    flex: 1;
    overflow: hidden;
	align-items:center;

}

.caixa-imagem img {
    width: 77%;
    height: auto;
    display: block;
	margin-left:150px;
	margin-right:150px;
	align-items:center;
}

.caixa-texto {
    width:100%;
	height:auto;
    box-sizing: border-box;
	display:block;
	margin-left:150px;
	margin-right:150px;

}
.font{
	font-family: Century Gothic;
}

.fontt{
	font-size:120px;
}

		img {
  border-radius: 10px;
  
}
  hr {
            width: 86%; 
            border: none;
            border-top: 3px solid #000; 
        }
		.vl {
  border-left: 3px solid #000;
  height: 230px;
}

    </style>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>O Tabuas - Inicio</title>
</head>

  <div class="navbar">
	<a href="inicio.php"><img src="otabuas.png" class="tabuas" height="68" width="100"></a>
  <button class="abrirnav" onclick="abrirNav()"> ☰ </button>
</div>

<div id="navertical" class="navertical">
  <a href="javascript:void(0)" class="fechar" onclick="fecharNav()">×</a>
  <a href="inicio.php">🏡 | Inicio</a>
  <a href="Menu.php">📜 | Cardapio</a>
  <a href="ler_dados1.php">⭐ | Avalie-nos</a>
  <a href="contacto.php">📞 | Contacte-nos</a>
  <a href="takeaway.php">📦 | Take-Away</a>
  <a href="Reservar.php"> 🪑 | Reservas</a><br>
  <a href="login.php"><img src="user.png" height="48" width="60"><br>Login</a>
</div>
<body>
    <header>
        <h1 class="fontt">Venha conhecer-nos</h1>
    </header>
	<div class="font">
<p align="center">Descubra o prazer de momentos deliciosos, onde cada café é uma paixão e cada refeição é uma celebração. <br> Escolheu o sitio certo!  Venha-nos visitar </p>
<div class="infoimagem">
        <?php
            $imagens = [
                'pqn_almoco.jpg',
                'francesinha_batata.jpg',
                'italiana.jpg',
				'cafe.jpg',
            ];

            foreach ($imagens as $imagem) {
                echo '<img src="' . $imagem . '" alt="Imagem">';
            }
        ?>
    </div>
	<br><br>
	<hr>
	<br><br>
	<div class="caixa">
        <div class="caixa-imagem">
            <img src="pasteis.jpeg" height="250" width="450">
        </div>
        <div class="caixa-texto">
            <p>Explore sabores excepcionais no nosso menu e deixe-se cativar por uma
			experiência gastronômica única</p>
			<i>Confira as nossas opções e descubra os nossos segredos.</i>
			<a href="Menu.php"><input type="button" class="botaoflu" value="Saiba mais"></a>
        </div>
    </div>
	<br><br><br><br>
    <div class="caixa">
        <div class="caixa-texto">
            <i>Reserve agora e garanta seu lugar para uma experiência inesquecível.</i>
			<a href="reservar.php"><input type="button" class="botaoflu" value="Saiba mais"></a>
        </div>
        <div class="sala2.png">
            <img src="sala.jpg"  height="250" width="450">
			
        </div>
    </div>
	<br><br>
	<div class="caixa">
        
        <div class="caixa-imagem">
            <img src="login.png"  height="370" width="500">		
        </div>
		<div class="caixa-texto">
            <p>Compartilhe a sua experiência conosco, sua opinião é o tempero especial 
			que valorizamos em cada prato.<br><br><i> Avalie o nosso restaurante e deixe-nos superar as suas
			expectativas..</i></p>
			<a href="ler_dados1.php"><input type="button" class="botaoflu" value="Saiba mais"></a>
        </div>
    </div>
	<br><br>
	<div class="caixa">
        <div class="caixa-texto">
            <p Align="center">Registe-se já para nao perder nenhuma novidade!</p>
			<h4 align="center">Crie já a sua conta!</h4>
			<a href="ler_dados.php"><input type="button" class="botaoflu" value="Registe-se"></a>
			<h5 align="center">Caso ja tenha conta ➔ <a href="login.php">Entrar</a></h5>
        </div>
        <div class="caixa-imagem">
            <img src="avaliar.png" height="400" width="500">
			</div>
		
        
    </div>
	<br><br>
	<div class="caixa">
	<div class="caixa-imagem">
            <img src="entrada.jpg" alt="Descrição da imagem" height="480" width="500">
        </div>
        <div class="caixa-texto">
    
			 Todos os dias tem uma primeira vez para tudo,<br> venha-nos visitar!
			<br><br>
			<p align="center">Horário:<br> segunda-feira-08:00–00:00<br>
					terça-feira-08:00–00:00<br>
					quarta-feira-08:00–00:00<br>
					quinta-feira-08:00–00:00<br>
					sexta-feira-08:00–00:00<br>
					sábado-08:00–00:00<br>
					domingo-08:00–00:00
					</p>

			<a href="contacto.php"><input type="button" class="botaoflu" value="Saiba mais"></a>
        </div>
        
    </div>
	</div>
	<br><br>
	
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
	<div class="vl"></div>
    <div class="footer-coluna">
    
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
