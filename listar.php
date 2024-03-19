<html>
<body>
<style>
body{
	font-family:Century Gothic;
}
	.font{
		  font-size: 24px;
    color: #007bff;
    text-align: center;
    margin-bottom: 20px;
	 border: 3px solid #007bff; 
    border-radius: 10px; 
	font-family:Broadway;
	width:20%;
	}
	.fontt{
		font-family:Arial;
	}
table, td, th {
    border: 2px solid black;
}

table {
    border-collapse: collapse;
    width: 80%;
	text-align: center;
}

th {
    height: 30px;
	width:60px;
}
.botaoflu {
    background-color: #B39D70;
    color: white;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 30%;
	font-size:17px;
}
a{
	text-decoration:none;
}
input[type="text"], input[type="number"], input[type="submit"], input[type="file"],
select.categoria {
    width: 45%;
    padding: 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	text-align: center;
}
@media only screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                height: auto;
            }
</style>
<center>
<h1 class="font">REGISTO CLIENTES</h1>

<?php
include('liga_bd.php');

$sql = "SELECT * FROM registar";
$resultado = mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);
echo '<table border=1>';
echo "<tr><th>Feito</th><th>Codigo</th><th>Nome</th><th>Apelido</th><th>Idade</th><th>Telefone</th>
<th>Morada</th><th>Nome de utilizador</th><th>Email</th><th>Palavra-passe</th><th>Editar</th><th>Eliminar</th></tr>";
while ($registo = mysqli_fetch_array($resultado)) {
    echo "<tr>
        <td><input type='checkbox' name='selecionar[]' value='" . $registo['cod'] . "'></td>
        <td>" . $registo['cod'] . "</td>
        <td>" . $registo['nome'] . "</td>
        <td>" . $registo['apelido'] . "</td>
        <td>" . $registo['idade'] . "</td>
        <td>" . $registo['telefone'] . "</td>
        <td>" . $registo['morada'] . "</td>
        <td>" . $registo['utilizador'] . "</td>
        <td>" . $registo['email'] . "</td>
        <td>" . $registo['pass'] . "</td>
        <td><a href=editar.php?cod=" . $registo['cod'] . ">Editar</a></td>
        <td><a href=admin_eliminar_clientes.php?cod=" . $registo['cod'] . ">Eliminar</a></td>
    </tr>";
}
echo "</table>";
?>
<br><br><br>
<h1 class="font">AVALIAÇÕES</h1>

<?php
include('liga_bd.php');

$sql="SELECT * FROM avaliar";
$resultado= mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);
echo '<table border=1>';
echo "<tr><th>Feito</th><th>ID</th><th>Nome</th><th>Rating</th><th>Comentario</th><th>Eliminar</th></tr>";
while($registo = mysqli_fetch_array($resultado))
{
	echo "<tr>
	<td><input type='checkbox' name='selecionar[]' value='" . $registo['id_rating'] . "'></td>
			<td>".$registo['id_rating']."</td>
			<td>".$registo['nome']."</td>
			<td>".$registo['rating']."</td>
			<td>".$registo['comentario']."</td>
			<td><a href=admin_eliminar_avaliar.php?cod=".$registo['id_rating'].">Eliminar</a></td>
			</tr>";
}
echo "</table>";

?>
<br><br><br>
<h1 class="font">RESERVAS</h1>

<?php
include('liga_bd.php');

$sql = "SELECT * FROM reservar";
$resultado = mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);
echo '<table border=1>';

echo "<tr><th>Feito</th>
<th>Codigo</th><th>Nome</th><th>Email</th><th>Numero de pessoas</th>
<th>Tipo de reserva</th><th>Horas de reserva</th><th>Requisitos especiais</th><th>Eiminar</th></tr>";
while ($registo = mysqli_fetch_array($resultado)) {
    echo "<tr>
	<td><input type='checkbox' name='selecionar[]' value='" . $registo['id_reserva'] . "'></td>
	<td>" . $registo['id_reserva'] . "</td>
	<td>" . $registo['nome'] . "</td>
	<td>" . $registo['email'] . "</td>
	<td>" . $registo['numero_p'] . "</td>
	<td>" . $registo['tipo_reserva'] . "</td>
	<td>" . $registo['horas_reserva'] . "</td>
	<td>" . $registo['requisitos_especiais'] . "</td>
	<td><a href=admin_eliminar_reserva.php?cod=" . $registo['id_reserva'] . ">Eliminar</a></td>
	</tr>";
}
echo "</table>";
?>

<br><br><br>
<h1 class="font">TAKE-AWAY</h1>

<?php
include('liga_bd.php');

$sql = "SELECT * FROM takeaway2 INNER JOIN itenspedido2 ";
$resultado = mysqli_query($liga_bd, $sql);
$numregistos = mysqli_num_rows($resultado);

echo '<table border=1>';
echo "<tr><th>Feito</th><th>Nome</th><th>Telefone</th><th>Data do pedido</th><th>Pedido</th><th>Quantidade de pizza</th><th>Bebidas</th><th>Quantidade de bebidas</th><th>Outros pratos</th><th>Outras bebidas</th><th>Eliminar</th></tr>";

while($registo = mysqli_fetch_array($resultado))
{
    echo "<tr>
        <td><input type='checkbox' name='selecionar[]' value='" . $registo['id_pedido'] . "'></td>
        
        <td>".$registo['nome_cliente']."</td>
        <td>".$registo['telefone_cliente']."</td>
        <td>".$registo['data_pedido']."</td>
        <td>".$registo['pedido']."</td>
        <td>".$registo['quantidade']."</td>
		<td>".$registo['bebidas']."</td>
		<td>".$registo['quantidade_bebida']."</td>
        <td>".$registo['outro_prato']."</td>
        <td>".$registo['outro_bebida']."</td>
        <td><a href=admin_eliminar_takeaway.php?cod=".$registo['telefone_cliente'].">Eliminar</a></td>
        </tr>";
}

echo "</table>";
?>

<br><br><br>
<h1 class="font">Adicionar Refeição</h1>
<div class="formulario">
<form action="insere_produto.php" method="post">
<?php
include('liga_bd.php');

$sql = "SELECT MAX(id_produto) as ultimo_id FROM produtos";
$resultado = mysqli_query($liga_bd, $sql);

if ($resultado) {
    $registo = mysqli_fetch_array($resultado);

    if ($registo['ultimo_id'] !== null) {
        echo "<h3><p>O ultimo ID introduzido foi: <b> " . $registo['ultimo_id'] . "</b></p></h3>";
	echo "Insira o numero a apresentado!";
    } else {
        echo "Nenhum registro encontrado.";
    }
} else {
    echo "Erro na consulta SQL: " . mysqli_error($liga_bd);
}

mysqli_close($liga_bd);
?>
    <table class="adicionar" border=1>
	<tr>
            <td>ID:</td>
            <td><input type="text" name="id_produto"></td>
        </tr>
        <tr>
            <td>Nome da Refeição:</td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td><select name="categoria" id="categoria" class="categoria">
				<option>Pastelaria</option>
				<option>Pizzaria</option>
				<option>Snacks</option>
				<option>Massas</option>
				<option>Bebidas</option>
				<option>Menu do dia</option>
				<option>Sobremesas</option>
			</select></td>
        </tr>
        <tr>
            <td>Preço:</td>
            <td><input type="text" name="preco"></td>
        </tr>
	<tr>
            <td>Insira uma imagem:</td>
            <td><input type="text" name="url_imagem"><br><?php
			echo "Introduzir o formato da imagem! (JPG, JPEG, PNG, etc)<br> ex: cavalho.jpg";
			?></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Adicionar Produto"></td>
        </tr>
    </table>
	</form>
	
	<br><br><br>
	<h1 class="font">Eliminar Refeição</h1>
	<form action="eliminar_produto.php" method="get">
    <label for="nome_produto">Nome do Produto:</label>
    <input type="text" id="nome_produto" name="nome">
    <button type="submit" class="botaflu">Eliminar Produto</button>

</div>


<br><br><br>
<a href="inicio.php"><input type="button" value="Voltar ao inicio" class="botaoflu" size="40px"></a>
</center>
</body>
</html>

