<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Novo Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
		$pedido	  = $_POST["pedido"];
		$nome 	  = $_POST["nome"];
		$fone 	  = $_POST["fone"];
		$endereco = $_POST["endereco"];
		$numero = $_POST["numero"];
		$bairro   = $_POST["bairro"];
		$estado = $_POST["estado"];
		if ($estado == 1){
			$state = "AC";
		}
		elseif ($estado == 2){
			$state = "AL";
		}
		elseif ($estado == 3){
			$state = "AP";
		}
		elseif ($estado == 4){
			$state = "AM";
		}
		elseif ($estado == 5){
			$state = "BA";
		}
		elseif ($estado == 6){
			$state = "CE";
		}
		elseif ($estado == 7){
			$state = "DF";
		}
		elseif ($estado == 8){
			$state = "ES";
		}
		elseif ($estado == 9){
			$state = "GO";
		}
		elseif ($estado == 10){
			$state = "MA";
		}
		elseif ($estado == 11){
			$state = "MT";
		}
		elseif ($estado == 12){
			$state = "MS";
		}
		elseif ($estado == 13){
			$state = "MG";
		}
		elseif ($estado == 14){
			$state = "PA";
		}
		elseif ($estado == 15){
			$state = "PB";
		}
		elseif ($estado == 16){
			$state = "PR";
		}
		elseif ($estado == 17){
			$state = "PE";
		}
		elseif ($estado == 18){
			$state = "PI";
		}
		elseif ($estado == 19){
			$state = "RJ";
		}
		elseif ($estado == 20){
			$state = "RN";
		}
		elseif ($estado == 21){
			$state = "RS";
		}
		elseif ($estado == 22){
			$state = "RO";
		}
		elseif ($estado == 23){
			$state = "RR";
		}
		elseif ($estado == 24){
			$state = "SC";
		}
		elseif ($estado == 25){
			$state = "SP";
		}
		elseif ($estado == 26){
			$state = "SE";
		}
		elseif ($estado == 27){
			$state = "TO";
		}
		else{
			$state = "SP";
		}
		require("../banco/conecta_banco.php");
		$mysqli->query("INSERT INTO vendaClient (id, nameClient, phone, endereco, numeroCasa, bairro, estado) VALUES ('$pedido','$nome','$fone','$endereco','$numero','$bairro','$state')");
		echo $mysqli->error;
		//limpa carrinho
		$mysqli->query("delete from carrinho where compra = '$pedido'");
		echo $mysqli->error;
		echo "<div align = 'Center'>";
		echo "<p>Compra cadastrada com sucesso!</p>";
		echo "<h3>";
		echo "<a href='../index.php'>Menu Iniciar</a>";
		echo "</h3>";
		echo "</div>";
	?> 
</body>

</html>