<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	if(isset($_GET["excluir"])){

		$idpro = htmlentities($_GET["excluir"]);
		require("conecta.php");
		$mysqli->query("delete from service where id = '$idpro'");
		echo $mysqli->error;
		if ($mysqli->error==""){

			echo "Excluido com Sucesso<br />";
			echo "<a href='index.php'>Voltar</a>";
		}

	}


	?>

</body>
</html>