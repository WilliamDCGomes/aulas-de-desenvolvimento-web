<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	if(isset($_GET["excluir"])){

		$id = htmlentities($_GET["excluir"]);
		require("conecta.php");
		$mysqli->query("delete from fornecedor where id = '$id'");
		echo $mysqli->error;
		if ($mysqli->error==""){

			echo "Excluido com Sucesso<br />";
			echo "<a href='index.php'>Voltar</a>";
		}

	}


	?>

</body>
</html>