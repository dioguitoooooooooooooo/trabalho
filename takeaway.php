<html>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Century Gothic;
    background-color:#F1F1F1;
	font-size:20px;
	background-size:cover;
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
.font{
	font-family: Century Gothic;
}

	
.caixa {
    width: 600px;
    margin: 100px auto;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	align-items:center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}


label {
    margin-top: 10px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px 0;
    box-sizing: border-box;
}


input[type="text"], input[type="number"],input[type="datetime-local"],
select.pedidos {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

table {
    width: 100%;
	text-align:center;
	justify-content:center;
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

		.font{
		font-size:18px;
	font-family: arial;
	 font-weight: bold;
}
.obs{
font-family:arial;
font-size:13px;
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



<center>
  <div class="caixa">
    <h1>Take-Away</h1>
    <div class="font">
        <form action="insere_takeaway.php" method="post">
            <table>
                <tr>
                    <td colspan=2>Primeiro e Ultimo nome:
                        <input type="text" name="nome_cliente">
                    </td>
                    <td>Telefone:
                        <input type="text" name="telefone_cliente">
                    </td>
                </tr>
                <tr>
                    <td colspan=3>Data e hora
                        <input type="datetime-local" name="data_pedido">
                    </td>
                </tr>
                <tr>
                    <td>Selecione um Menu:
                        <select name="pedido" id="pedido" class="pedidos">
                             <option>Sobreiro</option>
				<option>Cedro</option>
				<option>Pau-Ferro</option>
				<option>Nogueira</option>
				<option>Carvalho</option>
				<option>Cerejeira (Vegetariana)</option>
				<option>Oliveira</option>
				<option>Tulipeira</option>
				<option>Pinho</option>
				<option>Eucalipto</option>
				<option>Faia</option>
                        </select>
                    </td>
                    <td>
                        <label>Quantidade</label><input type="number" name="quantidade">
                    </td>
                    <td>
                        <label>Outro:</label><input type="text" name="outro_prato">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="opcao">Selecione uma Bebida:</label><br>
                        <select name="bebidas" id="bebidas" class="pedidos">
                            <option>Coca-Cola</option>
				<option>Coca-Cola Zero</option>
				<option>Ice-Tea Limão</option>
				<option>Ice-Tea Manga</option>
				<option>Ice-Tea Pêssego</option>
				<option>Sprite</option>
				<option>Pepsi</option>
				<option>Pepsi Max</option>
				<option>Fanta Laranja</option>
				<option>Sumol Laranja</option>
				<option>Sumol Ananás</option>
				<option>Sumol Maracujá</option>
				<option>Água</option>
				<option>7UP</option>
				<option>Cerveja</option>
                        </select>
                    </td>
                    <td>
                        <label>Quantidade</label><input type="number" name="quantidade_bebida">
                    </td>
                    <td>
                        <label>Outro:</label><input type="text" name="outro_bebida">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="obs">Obs: Take-Away tem um acréscimo de 0,50€</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="">
                            <input type="submit" class="botaoflu" value="Enviar">
                        </a>
                    </td>
                    <td>
                        <input type="reset" class="botaoflu" value="Limpar formulário">
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <a href="inicio.php">
                            <input type="button" class="botaoflu" value="Voltar">
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</center>
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
