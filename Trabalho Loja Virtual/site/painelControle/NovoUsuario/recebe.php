<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Novo Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
		$nome 	  = $_POST["nome"];
		$senha 	  = $_POST["senha"];
		require("../../banco/conecta_banco.php");
		$mysqli->query("INSERT INTO logins (loginName, password) VALUES ('$nome',MD5('$senha'))");
		echo $mysqli->error;
		echo "<p>Usuário Cadastrado com Sucesso</p>";
	?> 
</body>

</html>