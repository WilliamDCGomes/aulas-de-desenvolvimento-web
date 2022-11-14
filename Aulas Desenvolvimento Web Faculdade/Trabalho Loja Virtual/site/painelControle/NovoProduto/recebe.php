<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Novo Produto</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
	<?php
		$nome 	  = $_POST["nome"];
		$descricao 	  = $_POST["descricao"];
		$price 	  = $_POST["price"];
		$image1 	  = $_POST["image1"];
		$image2 	  = $_POST["image2"];
		$image1 = "img1/".$image1;
		$image2 = "img1/".$image2;
		require("../../banco/conecta_banco.php");
		$mysqli->query("INSERT INTO product (nameProduct, imageAdress1, imageAdress2, descricao, price) VALUES ('$nome','$image1','$image2','$descricao','$price')");
		echo $mysqli->error;
		echo "<p>Produto Cadastrado com Sucesso</p>";
	?> 
</body>

</html>