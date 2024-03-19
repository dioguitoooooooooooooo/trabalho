<html>
<head>
	<title>Instalações</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="insta.css">
</head>

<style>
 .galeria {
      position: relative;
      text-align: center;
    }

    .fotos {
      display: none;
      width: 100%;
      height: auto;
    }

    .label {
      margin-top: 10px;
      font-size: 16px;
    }

    .botao-display {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      background-color: rgba(255, 255, 255, 0.5);
      border: none;
      cursor: pointer;
      font-size: 24px;
    }
</style>



<body bgcolor="#F0E68C">
	<div id="instal">
	<br><br>
	<font face="Arial" color="black" size="5px">
	<div class="logo"><img src="logo.png" style="float:right;width:175px"></div><br><br>
	<br><center><p><h1>As nossas instalações</h1></p></center>
	<br><br><br>
	
<p><center>
<h3>O Complexo Desportivo de Lousada constitui um virar de página no contexto local e regional.
 O conjunto de infraestruturas e a rede de equipamentos previstos representam uma aposta 
 decisiva na promoção e desenvolvimento do desporto e da atividade física, com óbvias 
 repercussões nos mais diversos âmbitos.<h3></p>
	
	</center>
	</div><br><br><br><br>
	<center>
	<table>
	<tr>
		<div class="galeria">
  <button class="botao-display" onclick="plusDivs(1)">&#10095;</button>
  <img class="fotos" src="sala2.jpg" alt="Complexo">
  <img class="fotos" src="sala.jpg" alt="Estádio">
  <!-- Adicione mais imagens conforme necessário -->

  <div class="label" id="nome-imagem">Complexo</div>
</div>

<script>
  let slideIndex = 0;

  function showSlides() {
    let slides = document.getElementsByClassName("fotos");
    let labels = ["Complexo", "Estádio"];  // Adicione mais nomes conforme necessário

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("fotos");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

$("#button").click(function() {
  $('html, body').animate({
    scrollTop: $("#anchor").offset().top
  }, 2000);
});

</script>
		</tr>
		</table>
	</center>
	
	<br><br><br><br><br><br><br><br><br>
	<fieldset>
	
	<div class="tit">
	<table border="0">
	<div id="anchor">
	<center>
	<p><h1>Ténis</h1></p>
	</center>	
	</div>
		<table>
			<tr>
              
			  <td>
				<div class="tenis">
				
				<a target="_top" href="tenis.jpg">
				<img src="tenis.jpg" style="float:left;margin-left:10px;margin-right:25px;"width="350px">
				</a>
				</td>
				<br>
				</div>
					
				<br><br><td>
				<div class="text">
				
				
				<h3>Campo de Ténis de terra batida ao ar livre</h3>
				
				
				As infraestruturas são compostas por seis campos modernos e com excelente qualidade, sendo de terra batida e ao ar livre.
O espaço possui iluminação artificial, o que permite a realização de jogos, treinos ou aulas no período noturno.

Relativamente à sua utilização, jogam e treinam, atualmente, um elevado número de praticantes, quer do concelho quer de outros concelhos, sendo uma modalidade em grande expansão.


			
			
				</div></td>
				<br>
				<div class="caracteristicas">
				<tr>
			  <td><br>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>6 campos ao ar livre</li>
				<li>Piso de terra batida (pó de tijolo)</li>
				<li>Dimensões dos recintos de jogo: 23,77m X 10,97m</li>
				<li> Edfificios de apoio</li>
				<li>Balnearios - 2 para praticantes</li>
			</ul>
			</td>
			</tr>
				</div>
				
			</tr>
			</table>
			<br><br>
			<table>
			
			<tr>
			
			  <td>
			  <div class="textright">
			  <h3>Campos de tenis sinteticos</h3>
			  <br><br>
			 
Esta superfície oferece todas as vantagens de um campo de piso rápido com a elasticidade e conforto garantidos por uma superfície sintética.
			</td>
			</div>
			
			 
              <div class="tenisri">
			  <a target="_top" href="campo de tenis sintetico.jpg">
			  <img src="campo de tenis sintetico.jpg" style="float:right; margin-left:25px;margin-right:10px;"width="350px" class="###"><br>
			  </a>
			 
			  </tr>
			  <div class="obj">
			  <br>
			  <table>
			  <tr>
			  <td> <br><br>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>Piso Sintetico "supersoft ws"</li>
				<li>Certificado pelo ITF com classe 4(medium-fast)</li>
				<li>Dimensões dos recintos de jogo: 23,77m X 10,97m</li>
				<li> Edfificios de apoio</li>
				<li>Balnearios - 2 para praticantes</li>
			</ul>
			</td>
			  </tr>
			  </div>
			 </div>
			 </table>
			 
			 
			 </table>
			 <br><br>
		<table>
		<tr>
			<td>
			<div class="tenis">
			<a target="_top" href="tenis de mesa.jpg">
              <img src="tenis de mesa.jpg" class="###" style="float:left; margin-left:10px;margin-right:25px;"width="350px" class="###"><br>
			  </a>
			  </td>
			  </div>
			  <div class="text">
			  <td><h3>Pavilhão de Ténis de Mesa</h3>
			  <br><br>
			  
			  </td>
			  
			  </div>
		</tr>
		</table>
		<br><br>
		<div class="tihoq">
		</fieldset>
		<br><br><br><br><br>
		
		<fieldset>
		<center>
		<p><h1>Hoquei</h1></p>
		</center>
		</div>
		<table border="0">
            <tr>  
			  <td>
			  <div class="textright"> 
			  <h3>Estadio Municipal de hoquei</h3>
			  <br>
			 O Estádio Municipal de Hóquei em Campo foi a primeira infraestrutura a ser construída no Complexo Desportivo de Lousada, no ano de 2003.

A construção deste equipamento deveu-se à grande tradição que esta modalidade tem no Concelho de Lousada, permitindo aos seus praticantes a utilização de um espaço de excelentes condições.
		
No que diz respeito à sua utilização, jogam, atualmente, as equipas de hóquei em campo de Lousada. Tem treinos e jogos regulares. As seleções nacionais de hóquei em campo também aqui estagiam com frequência, desde os escalões jovens aos seniores, na vertente masculina e feminina, assim como no parahóquei. 
			</div>
			</td>
			<td>
			
			  <div class="hoqueiri">
			  <a target="_top" href="estadio de hoquei.jpeg">
			  <img src="estadio de hoquei.jpeg" style="float:right;	margin-left:25px;margin-right:10px;"width="350px" class="###"><br>
			  </a>
			  </div>
			  <div class="obj">
			   <br>
			   <tr>
			  <td>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>Dimensões do recinto de jogo:91,44m X 55m</li>
				<li>Tribuna<br>
				-50 lugares sentados</li>
				<li>Bancada coberta<br>
				-1000 lugares sentados</li>
				<li>Balnearios<br>
				-1 para arbitros<br>
				-6 para praticantes</li>
				
			</ul>
			</td>
			  </tr>
			  </div>
			
			
			</td>
			</tr>
			</table>
		  <div class="tifut">
		  </fieldset>
		  <br><br><br>
		  <fieldset>
		  <table>
			<center>
				<p><h1>Futebol</h1></p>
			</center>
		  </div>
		  <br><br>
			<tr>
              <td>
			  <div class="campofut">
			  <a target="_top" href="campo multifuncional.jpeg">
			  <img src="campo multifuncional.jpeg" style="float:left; margin-left:10px;margin-right:25px;"width="350px" class="###"><br>
			  </a>
			  </div>
			  </td><td>
			  <div class="text">
			  
			  <h3>Campo Multifuncional</h3>
			  
			  <br>
			  
			  Os Campos Multifuncionais do Complexo Desportivo de Lousada são compostos por dois espaços distintos, com valência para a prática de futebol.

As excelentes condições desta infraestrutura têm atraído também o estágio de equipas de diversos escalões e géneros.</h4></p>
			 
			 
			 
			 </div></td>
			 </tr>
			 <div class="caracteristicas">
			 <br>
			   <tr>
			  <td>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>Dimensões do recinto de jogo<br>
					-Futebol – 105m X 68m<br>
					-Futebol - 100m x 65m<br>
					-Futebol 5 - 40m x 20m</li>
				<li>Bancada coberta<br>
				-350 lugares cobertos</li>
				<li>Balnearios - 3 para arbitros - 10 para praticantes</li>
				
			</ul>
			</td>
			
			  </tr>
			  </div>
			  
			 </table>
			 <br><br><br>
			 
			<table>
			<td>
			<div class="textright">
			
			<h3>Estadio Municipal de Lousada</h3>
			<br><p>
			 O Estádio Municipal de Futebol do Complexo Desportivo de Lousada foi concluído no ano de 2012.

Esta construção consistiu na desmobilização do antigo estádio, que se situava ao lado do Parque da Feira, no centro da Vila, para o referido Complexo, concentrando, ainda mais, os espaços desportivos.

O espaço tem, simultaneamente, nos topos, mais dois espaços de treino e aquecimento em relva natural
			  O Município pretende, com este espaço, atrair estágios de equipas de futebol, nacionais ou estrangeiras.
			  
			  </p>
			  </div>
</td>
			  <td>
              <div class="campofutri">
			  <a target="_top" href="estadio de lousada.jpeg">
			  <img src="estadio de lousada.jpeg" style="float:right; margin-left:25px;margin-right:10px;"width="350px" class="###"><br>
			  </a>
			  
				</div><br>
				</td>
			  <div class="obj">
			  <br>
			  <table>
			   <tr>
			  <td><br>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>Tipo de piso: relva natural</li>
				<li>Dimensões do recinto de jogo: 105m X 68m</li>
				<li>Bancada coberta: 1000 lugares sentados</li>
				<li>Bancada descoberta: 600 lugares sentados</li>
				<li>Balnearios<br>
				-2 para arbitros<br>
				-4 para praticantes</li>
				
			</ul>
			</td>
			  </tr>
			  </table>
			  </div>
			  
			</table>
			</p>
			<br><br><br><br>
			<table>
				<td>
				<div class="minifut">
				<a target="_top" href="minicampo.jpg" >
					  <img src="minicampo.jpg" style="float:right; margin-left:10px;margin-right:25px;"width="350px" class="###"><br>
					  </a>
					  
				</div>
				</td>
				<td>
				<div class="text">
				
					<h3>Mini-Campo</h3>
				</div>
				</td>
			</table>
			<br><br><br>
			<table>
			<tr>
			<td>
			<div class="textright">
					  
					  
					  <h3>Relvado nº2</h3>
					  <br><br>
					  Com piso de relva natural, o relvado oferece condições excelentes para a prática da modalidade ao mais alto nível, com uma localização reservada e ideal para a realização de estágios desportivos
					  
					  </div>
					  </td>
				  <td>
				  <div class="campofut">
					  <a target="_top" href="relvado2.jpeg">
					  <img src="relvado2.jpeg" style="float:right;margin-left:25px;margin-right:10px;" width="350px" class="###"><br>
					  </a>
					  </div></td>
					  
					  
				
			</tr>
			<div class="obj">
			   <br>
			   <tr>
			  <td>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>Tipo de piso- Relva natural</li>
				<li>Dimensões do recinto de jogo: 105m X 68m</li>
				<li>Bancada: 840 lugares sentados</li>
				<li>Balnearios - 1 para arbitros - 2 para praticantes</li>
				
			</ul>
			</td>
			  </tr>
			  </div>
			</table>
			<br><br><br><br>
			<table>
			<tr>
			<div class="paviri">
			  <td>
			  <a target="_top" href="pavilhão polidesportivo.jpg">
              <img src="pavilhão polidesportivo.jpg" style="float:left; margin-left:10px; margin-right:25px;" width="350px" class="###"><br>
			  </a>
			  </div>
			  </td>
			  <td>
			  <div class="text">
			  <h3>Pavilhão polidesportivo</h3>
			  <br><br>
			  
			  
			  Infraestrutura coberta com pavimento modular que permite a prática de desportos indoor.
			  </div>
			  </td>
			
			<div class="caracteristicas">
			   <br>
			   <tr>
			  <td>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>Dimensões: 40m X 20m</li>
				<li>Bancada: 100 lugares</li>
				<br>
				<b>Modalidades</b>
				<li>Futsal</li>
				<li>Andebol</li>
				<li>Basquetebol</li>
				<li>Voleibol</li>
				
			</ul>
			</td>
			  </tr>
			  </div>
			  </tr>
			 </table>
			</tr>
			
			</fieldset>
			<br><br>
			<div class="titatle">
			<fieldset>
			<table>
			<center>
			<p><h1>Atletismo</h1></p>
			</center>
			</div>
			<tr>
			
			´<td>
			<div class="textright">
				<h3>Pista de Atletismo</h3>Piso “Mondotrack 13,5 mm” aprovado pela IAAF.
				</div>
				</td>
				
				
				<a href="pista de atletismo.jpeg" target="_top">
					<img src="pista de atletismo.jpeg"  width="350px" style="float:right;margin-left:25px;margin-right:10px;">
				</a>
				
				
				<br>
		
			   <tr>
			  <td>
			  <p><br><br>
			  <b>Caracteristicas:</b>
			  <ul>
				<li>6 Corredores em toda extensão com 9 corredores na zona dos 100m, com sistema de videofinish “grand prix” com reactime wireless.</li>
				
			
			<br>
			<b>Setores:</b>
			<li>Salto em altura e salto com vara
			</li>
			<li>Salto em comprimento e triplo salto (4 caixas com direções opostas)
			</li>
			<li>Lançamento do Disco e do Martelo
			</li>
			<li>Lançamento do dardo
			</li>
			<li>Lançamento do Peso
			</li>
			<li>Vala de água
			</li>
			<br>
			<b>Zona coberta de apoio ao treino (localizada por baixo da bancada principal)</b>
			<li>5 Corredores de 60m</li>
			<li>1 caixa de saltos (comprimento e triplo salto)</li>
			</ul>
			</p>
			</td>
			  </tr>
		</tr>
			</table>
		</table>
		</div>
	</fieldset>
	<br><br>
	<fieldset>
	<div class="titpista">
			<table>
			<center>
			<p><h1>XCO</h1></p>
			</center>
			</div>
			<tr>
			<td><div class="pistaxco">
				<a target="_top" href="pista de xco.jpg">
              <img src="pista de xco.jpg" style="float:left; margin-left:10px;margin-right:25px;"width="350px" class="###"><br>
			  </div>
				</a>
				
			</td>
			<td>
			<div class="text">
				<h3>Pista de XCO</h3>Perfeitamente enquadrada com a natureza, a pista de XCO pretende oferecer ao Complexo Desportivo uma maior polivalência, aproveitando o facto de ser uma modalidade olímpica e de ter cada vez mais praticantes.
				A pista permite efetuar até cerca de 5kms, variando de acordo com a competição e escalão.

Tem dificuldades variadas, com subidas bastantes duras, um Rock Garden, zonas técnicas e descidas acentuadas.
<br>
<b>Uma verdadeira aventura!</b>
				</div>
			</td>
			</tr>
			</table>
	</fieldset>
	<br><br>
	<fieldset>
	<div class="titpista">
			<table>
			<center>
			<p><h1>Residencia</h1></p>
			</center>
			</div>
			<tr>
			<td>
				<div class="textright">
				<h3>Residencia Desportiva</h3>A Residência Desportiva do Complexo Desportivo de Lousada foi construída em simultâneo com o Estádio Municipal de Hóquei em Campo, em 2003.
				A quase totalidade dos estágios realizados no estádio de hóquei teve como local de estadia esta Residência.

O espaço tem ainda uma sala de estar e uma cantina com cozinha de apoio, podendo ser solicitados os serviços de refeição.
				
			
			</div></td>
			<div class="residencia">
			<td>
				<a target="_top" href="resindencia.jpg">
              <img src="residencia.jpg" style="float:right; margin-left:25px;margin-right:10px;;"width="350px" class="###"><br>
			  </div>
				</a>
				<br>
				</td>
				</tr>
			</table>
	</fieldset>
	</font>
</body>
</html>
