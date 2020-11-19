<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Remove do Carrinho</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
		$nome 	  = $_POST["nome"];
		$valor 	  = $_POST["valor"];
		$compra 	  = $_POST["carrinho"];
		require("../banco/conecta_banco.php");
		$mysqli->query("delete from carrinho where compra = '$compra' and price = '$valor' and nameProduct = '$nome'");
		echo $mysqli->error;
		echo "<form method='POST' action='index.php'>";
		echo "<p>Produto retirado do carrinho com sucesso</p>";
		echo "<a href='recebe.php' target='_self'><input type='submit' value='VOLTAR PARA O CARRINHO' class='button'> </a>";
		echo "</form>";
	?> 
</body>

</html>