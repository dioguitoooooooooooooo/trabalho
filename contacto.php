<html>

<head>
    <meta charset="UTF-8">
	<title>Contacte-nos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding: 0;
            font-family: broadway;
            font-size: 16px;
            background-color: #F1F1F1;
            max-width: 100%;
            margin: 0;
        }

        .navbar {
      background-color:#8B4513;
	  box-shadow: 0 0 2px rgba(0, 0, 0, 0.5), 0 05px rgba(0, 0, 0, 0.3) inset;
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

        .footer {
            color: black;
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

        
        
        .caixa {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .img-caixa-left {
            flex: 1;
            overflow: hidden;
        }

        .img-caixa-left img {
            width: 100%;
            height: auto;
            display: block;
        }

        .texto-caixa {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            display: block;
        }

        .font {
            font-family: arial;
        }

        input[type="button"] {
            width: 100%;
            background-color: #8B4513;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border: 1px solid #000000;
        }

        .margin {
            margin-right: 10px;
            margin-left: 10px;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                height: auto;
            }

            .navbar ul {
                flex-direction: column;
                align-items: center;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
            }

            .navbar li {
                margin: 0;
            }

            .navbar img {
                margin: 0;
            }

            .menu-icon {
                display: block;
                margin-right: 15px;
                cursor: pointer;
            }

            .nav-links {
                display: none;
                width: 100%;
                text-align: center;
            }

            .nav-links.show {
                display: flex;
            }
        }
    </style>
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

    <center>
        <br><br><br><br><br><br><a href="inicio.php"><img src="otabuas.png" width=200 height=118> </a>
    </center>
    <br><br>
    <div class="font">
        <div class="caixa">
            <div class="texto-caixa">
                Restaurante - O Tabuas
                <br> R. Palmira Meireles 643, Lousada, Porto, Portugal
                <br> Telefone: 913 351 497
                <br> Horário de Funcionamento
                <br> Segunda a domingo: 8:00 - 00:00
                <br><br>
                <br> Reserve já a sua mesa!<br> Online ou pelo nosso contacto<br><br>
                <hr><br>
                <b>Online:</b>
				  <a href="Reservar.php"><input type="button" value="Reserve Aqui" class="botaoflu"></a> <br>
                <p><b>Contacto:</b> <a href="tel:913351497">913 351 497</a></p>
                <b>Take-Away:</b>
                <a href="takeaway.php"><input type="button" value="Take-Away" class="botaoflu"></a>
            </div>

            <div class="img-caixa-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1499.2533043402325!2d-8.282088916340252!3d41.2760775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2492ee86aefba9%3A0x94351ab1f4fb2127!2sR.%20Palmira%20Meireles%20635%2C%204620-687%20Lousada!5e0!3m2!1spt-PT!2spt!4v1699966524854!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <br><br>

        <footer>
            <p class="margin" align="center">
                <br>
                <b>Caracteristicas:</b><br>Take away<br>Acessivel a cadeira de rodas<br></p>
            <hr>
            <p class="margin" align="center"><b>Siga-nos nas redes sociais</b><br>
                <a href="https://www.facebook.com/otabuas.lousada/?locale=pt_BR"><img src="face.png"></a>
                <a href="https://www.instagram.com/otabuaslousada/"><img src="insta.png"></a></p>
        </footer>
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