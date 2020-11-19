<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div align ="Center">
		<nav>
			<h3>
				<a href="#inicio">INICIO</a>
				&nbsp&nbsp&nbsp
				<a href="#sobre">SOBRE</a>
				&nbsp&nbsp&nbsp
				<a href="#produtos">PRODUTOS</a>
				&nbsp&nbsp&nbsp
				<a href="#contato">CONTATO</a>	
				&nbsp&nbsp&nbsp
				<a href="Carrinho/index.php" target="_self">CARRINHO</a>	
				&nbsp&nbsp&nbsp
				<a href="login/index.php" target="_self">ADMIN</a>	
			</h3>					
		</nav>
	</div>
	<br />
	<section id="inicio">
		<div align ="Center">
				<h1>Cell Bytes</h1>
		</div>
		<div align = "Center">
			<a href="Products/index.php" target="_self"><input type="submit" value="CLIQUE AQUI E FAÇA SEU PEDIDO AGORA!" class="button"> </a>
		</div>
	</section>
	<section id="sobre">
		<h2>Sobre</h2>
		<header>
			<p>Com 20 anos de atividades, a Cell Bytes é hoje uma das mais completas loja de informática no interior do Estado de São Paulo 
			sediada na cidade de Bauru, com consultores de vendas e técnicos especializados que garantem a máxima segurança na compra e 
			assistência técnica dos clientes. Além disso, é distribuidora oficial de diversas marcas reconhecidas mundialmente por sua qualidade. </p>
			<p>Os produtos da Cell Bytes não se resumem apenas à informática: games, instrumentos musicais, cadeiras gamers e móveis para escritório 
			integram também ao nosso mix de produtos principais como os microcomputadores, notebooks, periféricos, acessórios, impressoras, suprimentos, 
			nobreaks, estabilizadores, mochilas, maletas, tablets, câmeras digitais, filmadoras, smartphones e muito mais. Além de toda a variedade em 
			produtos, você pode contar com uma assistência técnica especializada em microcomputadores, notebooks, impressoras, projetores, nobreaks, TVs e smartphones.</p>
			<p>Com o objetivo de atender as necessidades de Bauru e região, a Cell Bytes tem buscado, no seu dia-a-dia, conhecimentos necessários para sempre prestar bons 
			serviços a todos os clientes. Quem opta pela Cell Bytes é um consumidor exigente e tem sempre suas expectativas atendidas, por isso sempre retorna e faz da loja 
			uma referência regional quando o assunto é informática.</p>
			<p>Possuímos duas lojas física na cidade de Bauru/SP, a qual nossa sede se situa no endereço da rua Gérson França 9-49. Nossos horários de atendimento são de 
			Segunda a Sexta-feira das 8h30 às 18hs e aos Sábados das 8h30 às 12h30.</p>
			<p>O compromisso com o cliente e com os colaboradores é a diretriz que norteia todos os atos da Bauruinfo e, portanto, todas as decisões são baseadas para a sua satisfação.</p>
			</br>
			<b>Nossa Missão</b>
			<p>Proporcionar soluções em tecnologia, informação e desenvolvimento para empresas e pessoas, de modo a garantir plena satisfação de nossos clientes.</p>
			</br>
			<b>Nossa Visão</b>
			<p>Alcançar a plena satisfação dos clientes todos os dias, em todos os setores, tornando a Cell Bytes referência na região em que atua até 2025.</p>
			</br>
			
			<b>Nossos Valores</b>
			<p>
				Qualidade e Inovação
				</br>                                                                                                                                 
				Garantia Eficaz  
				</br>                                                                                                                                                  
				Excelência Operacional    
				</br>                                                                                                                                
				Segurança para o Cliente  
			</p>
	</header>
	</section>
	<br><br><br>
	<section id="produtos">
		<h2>Produtos</h2>
		<?php
			require("banco/conecta_banco.php");
			$link = mysqli_connect("localhost", "root", "", "cellBytes");
			$result = mysqli_query($link, "SELECT id, nameProduct, imageAdress1, imageAdress2, descricao, price from product");
			$foi = false;
			while($row = mysqli_fetch_row($result)){
				$foi = true;
				echo "<form method='POST' action='adicionarCarrinho/recebe.php'>";
				echo "<div align = 'left'>";
				echo "<h4>Código do Produto:</h4> <input type='text' name= 'codProd' value = '$row[0]' size='8' maxlength='10' /><br />";
				echo "<h4>".$row[1]."</h4>";
				echo "</div>";
				echo "<div align ='left'><img src='".$row[2]."' class='img_padrao'>";
				echo "&nbsp&nbsp&nbsp";
				echo "<img src='".$row[3]."' class='img_padrao'></div>";
				echo "</br>";
				echo "<b>Descrição</b>";
				echo "<p>".$row[4]."</p>";
				echo "<div align = 'left'>";
				echo "<p1>R$ ".$row[5]."</p1>";
				echo "<h4>Quantidade desejada:</h4> <input type='text' name= 'quantProd' value = 1 size='8' maxlength='10' /><br />";
				echo "</br></br>";
				echo "<a href='adicionarCarrinho/recebe.php' target='_self'><input type='submit' value='ADICIONAR AO CARRINHO!' class='button'> </a>";
				echo "</div>";
				echo "</form>";
				echo "</br>";
			}
			if(!$foi){
				echo "<h2> Não há produtos cadastrado! </h2>";
			}
		?>
	</section>		
	<br><br><br>
	<section id="contato">
		<h2>Contato</h2>
		<p>Entre em contato com nossa equipe e agende um orçamento</p>
		<div><img src="img1/whatsappIcon.png" class="contato" >
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="img1/emailIcon.png" class="contato">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="img1/facebookIcon.png" class="contato">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="img1/instagramIcon.png" class="contato">
		</div>
		<p><a href="tel:1400000-0000">(14) XXXXX-XXXX</a>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="mailto:williamdouglasgomes@hotmail.com">williamdouglasgomes@hotmail.com</a>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="https://www.facebook.com" target="_blank">CellBytes Facebook</a>	
		&nbsp&nbsp&nbsp
		<a href="https://www.instagram.com" target="_blank">CellBytes Instagram</a></p>		
	</section>	
	<br><br><br>
	<footer>
		<g>Desenvolvido por William Douglas</g>
	</footer>	
	<div align ="Center">
		<nav>
			<h3>
				<a href="#inicio">INICIO</a>
				&nbsp&nbsp&nbsp
				<a href="#sobre">SOBRE</a>
				&nbsp&nbsp&nbsp
				<a href="#produtos">PRODUTOS</a>
				&nbsp&nbsp&nbsp
				<a href="#contato">CONTATO</a>	
				&nbsp&nbsp&nbsp
				<a href="Carrinho/index.php" target="_blank">CARRINHO</a>	
				&nbsp&nbsp&nbsp
				<a href="login/index.php" target="_blank">ADMIN</a>	
			</h3>					
		</nav>
	</div>
</body>

</html>