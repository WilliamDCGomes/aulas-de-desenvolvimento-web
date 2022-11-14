<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Adicionar no Carrinho</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
	<?php
		$cod 	  = $_POST["codProd"];
		$quant 	  = $_POST["quantProd"];
		require("../banco/conecta_banco.php");
		$link = mysqli_connect("localhost", "root", "", "cellBytes");
		$result1 = mysqli_query($link, "SELECT max(idaux) from vendaProduct");
		$compra = 1;
		if($row = mysqli_fetch_row($result1)){
			$compra = $row[0] + 1;
		}
		$result2 = mysqli_query($link, "SELECT nameProduct, price from product where id = '$cod'");
		if($row = mysqli_fetch_row($result2)){
			$mysqli->query("INSERT INTO carrinho (compra, nameProduct, price, quant) VALUES ('$compra','$row[0]','$row[1]','$quant')");
			echo $mysqli->error;
			echo "<div align = 'Center'>";
			echo "<p>Produto Cadastrado com Sucesso</p>";
			echo "<h3>";
			echo "<a href='../index.php'>Menu Iniciar</a>";
			echo "</h3>";
			echo "</div>";
		}
	?> 
</body>

</html>