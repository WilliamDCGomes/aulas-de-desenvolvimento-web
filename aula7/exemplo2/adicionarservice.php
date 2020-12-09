<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionarservice.php">
		Nome do Serviço: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o serviço">
		<br/>
		Preço do Hora: <input type="text" name="preco" size="7" maxlength="15" placeholder="Informe o preço do serviço por hora">		
		<br/>
		Tempo Previsto: <input type="text" name="tempoPrevisto" size="7" maxlength="5" placeholder="Informe o tempo previsto">
		<br/>
		Tempo Real: <input type="text" name="tempoReal" size="7" maxlength="5" placeholder="Informe o tempo total do serviço">
		<br/>
		Técnico Responsável: <input type="text" name="tecnicoResponsavel" size="50" maxlength="50" placeholder="Informe o técnico responsável por esse serviço">
		<br/>
		<br/><br/>
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("conecta.php");

	//$nome=$_POST["nome"];
	$nome=htmlentities($_POST["nome"]);	
	$preco=htmlentities($_POST["preco"]);
	$tempoPrevisto=htmlentities($_POST["tempoPrevisto"]);
	$tempoReal=htmlentities($_POST["tempoReal"]);
	$tecnicoResponsavel=htmlentities($_POST["tecnicoResponsavel"]);

	// gravando dados
	$mysqli->query("insert into service (nomeService, precoPorHora, tempoPrevisto, tempoReal, tecnicoResponsavel) values('$nome', '$preco', '$tempoPrevisto', '$tempoReal', '$tecnicoResponsavel')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='index.php'> Voltar</a>";
	}

}
?>