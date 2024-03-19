<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reserve Já</title>
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
}

td {
    padding: 5px;
	font-weight:bold;
}

input[type="text"],
input[type="number"],
input[type="submit"],
input[type="datetime-local"] {
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

    <div class="caixa">
        <h1>Reserve Já</h1>
        <div class="font">
            <form action="insere_reserva.php" method="post">
                <table>
                    <tr><td>Nome:</td><td><input type="text" name="nome" placeholder="Nome"></td></tr>
                    <tr><td>Telefone:</td><td><input type="text" name="telefone" placeholder="Telefone"></td></tr>
                    <tr><td>Email:</td><td><input type="text" name="email" placeholder="Email"></td></tr>
                    <tr><td>Numero de Pessoas:</td><td><input type="number" name="numero_p" placeholder="Nº de pessoas"></td></tr>
                    <tr><td>Tipo de reserva:</td><td><input type="text" name="tipo_reserva" placeholder="Tipo"></td></tr>
                    <tr><td>Requisitos especiais:</td><td><input type="text" name="requisitos_especiais" placeholder="Requisitos Especiais"></td></tr>
                    <tr><td>Data e Hora da reserva:</td><td><input type="datetime-local" name="horas_reserva" placeholder="Data e Hora"></td></tr>
                
                <tr><td><a href=""><input type="submit" class="botaoflu" value="Enviar"></a></td>
                <td><a href="inicio.php"><input type="button" value="Voltar" class="botaoflu"></a></td></tr>
				<tr><td colspan=2><input type="reset" value="Limpar Formulario" class="botaoflu">
				</table>
            </form>
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
