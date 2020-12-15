<?php 
	if(isset($_POST["cadastreClient"])){
		require("../banco/conecta.php");

		$nome=htmlentities($_POST["nome"]);	
		$cpf=htmlentities($_POST["cpf"]);
		$rg=htmlentities($_POST["rg"]);
		$nascimento=htmlentities($_POST["nascimento"]);
		$endereco=htmlentities($_POST["endereco"]);

		$mysqli->query("insert into cliente (nome, cpf, rg, nascimento, endereco) values('$nome', '$cpf', '$rg', '$nascimento', '$endereco')");
		echo $mysqli->error;

		if($mysqli->error == ""){

			echo "<br />Inserido com sucesso<br /></br />";

			echo "<a href='../index.php'> Voltar</a>";
		}
	}
?>