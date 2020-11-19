<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Produtos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<section id="produtos">
		<h2>Produtos</h2>
		<div align = "left">
				<a href="../index.php" target="_self"><input type="submit" value="PÁGINA INICIAL!" class="button"> </a>
		</div>
		<?php
			echo "<form method='POST' action='recebe.php'>";
			echo "<div align = 'left'>";
			echo "<h4>Nome do Produto:</h4> <input type='text' name= 'prodName' value='Digite o nome do Produto' size='50' maxlength='50' />";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<a href='recebe.php' target='_self'><input type='submit' value='PESQUISAR!' class='button'> </a>";
			echo "</div>";
			echo "</form>";
			echo "</br></br></br></br></br>";
			require("../banco/conecta_banco.php");
			$link = mysqli_connect("localhost", "root", "", "cellBytes");
			$result = mysqli_query($link, "SELECT id, nameProduct, imageAdress1, imageAdress2, descricao, price from product");
			$foi = false;
			while($row = mysqli_fetch_row($result)){
				$foi = true;
				echo "<form method='POST' action='../adicionarCarrinho/recebe.php'>";
				echo "<div align = 'left'>";
				echo "<h4>Código do Produto:</h4> <input type='text' name= 'codProd' value = '$row[0]' size='8' maxlength='10' /><br />";
				echo "<h4>".$row[1]."</h4>";
				echo "</div>";
				echo "<div align ='left'><img src='../".$row[2]."' class='img_padrao'>";
				echo "&nbsp&nbsp&nbsp";
				echo "<img src='../".$row[3]."' class='img_padrao'></div>";
				echo "</br>";
				echo "<b>Descrição</b>";
				echo "<p>".$row[4]."</p>";
				echo "<div align = 'left'>";
				echo "<p1>R$ ".$row[5]."</p1>";
				echo "<h4>Quantidade desejada:</h4> <input type='text' name= 'quantProd' value = 1 size='8' maxlength='10' /><br />";
				echo "</br></br>";
				echo "<a href='../adicionarCarrinho/recebe.php' target='_self'><input type='submit' value='ADICIONAR AO CARRINHO!' class='button'> </a>";
				echo "</div>";
				echo "</form>";
				echo "</br>";
			}
			if(!$foi){
				echo "<h2> Não há produtos cadastrados! </h2>";
			}
		?>
	</section>		
	<br><br><br>
	<section id="contato">
		<h2>Contato</h2>
		<p>Entre em contato com nossa equipe e agende um orçamento</p>
		<div><img src="../img1/whatsappIcon.png" class="contato" >
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="../img1/emailIcon.png" class="contato">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="../img1/facebookIcon.png" class="contato">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<img src="../img1/instagramIcon.png" class="contato">
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
</body>

</html>