<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Carrinho</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<section id="inicio">
		<div align ="Center">
				<h1>Seu Carrinho</h1>
		</div>
	</section>
	<div align = "Center">
			<a href="../index.php" target="_self"><input type="submit" value="PÁGINA INICIAL!" class="button"> </a>
	</div>
	<br><br><br>
	<section id="carrinho">
		<h2>Produtos</h2>
		<?php
			require("../banco/conecta_banco.php");
			$link = mysqli_connect("localhost", "root", "", "cellBytes");
			$result1 = mysqli_query($link, "SELECT max(idaux) from vendaProduct");
			$compra = 1;
			if($row = mysqli_fetch_row($result1)){
				$compra = $row[0] + 1;
			}
			$result2 = mysqli_query($link, "SELECT nameProduct, price, quant from carrinho where compra = '$compra'");
			$foi = false;
			$quant = 1;
			$total = 0;
			while($row = mysqli_fetch_row($result2)){
				$foi = true;
				echo "<form method='POST' action='recebe.php'>";
				echo "<fieldset style='width: 25%'>";
				echo "<div align = 'left'>";
				echo "<p>".$quant."</p>";
				echo "<p>Número do Carrinho:</p> <input type='text' name= 'carrinho' value = '$compra' size='8' maxlength='10' /><br />";
				echo "<p>Produto:</p> <input type='text' name= 'nome' value = '$row[0]' size='50' maxlength='50' /><br />";
				$sub = $row[1] * $row[2];
				echo "<p>Quantidade:</p> <input type='text' name= 'quant' value = '$row[2]' size='20' maxlength='20' /><br />";
				echo "<p>Valor:</p> <input type='text' name= 'valor' value = '$sub' size='20' maxlength='20' /><br />";
				$total += $sub;
				echo "</br></br>";
				echo "<a href='recebe.php' target='_self'><input type='submit' value='RETIRAR DO CARRINHO!' class='button'> </a>";
				echo "</div>";
				echo "</fieldset>";
				echo "</form>";
				echo "</br>";
				$quant ++;
			}
			if(!$foi){
				echo "<h2> Você não adicionou nada em seu carrinho ainda! </h2>";
			}
			else{
				echo "<div align = 'left'>";
				echo "<p>Total: R$ ".$total."</p>";
				echo "</div>";
				echo "</br></br>";
				echo "<form method='POST' action='../cadastrocliente/index.php'>";
				echo "<div align = 'left'>";
				echo "<a href='recebe.php' target='_self'><input type='submit' value='FINALIZAR COMPRA!' class='button'> </a>";
				echo "</div>";
				echo "</form>";
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