<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionarfor.php">
		Nome do Fornecedor: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o nome">
		<br/>
		CNPJ: <input type="text" name="cnpj" size="20" maxlength="20" placeholder="Informe o CNPJ">		
		<br/>
		CEP: <input type="text" name="cep" size="15" maxlength="15" placeholder="Informe o CEP">
		<br/>
		Endereço: <input type="text" name="endereco" size="50" maxlength="50" placeholder="Informe o endereço">
		<br/>
		Telefone: <input type="text" name="telefone" size="15" maxlength="15" placeholder="Informe o telefone">
		<br/>
		<br/><br/>
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
if(isset($_POST["botao"])){

	require("conecta.php");

	$nome=htmlentities($_POST["nome"]);	
	$cnpj=htmlentities($_POST["cnpj"]);
	$cep=htmlentities($_POST["cep"]);
	$endereco=htmlentities($_POST["endereco"]);
	$telefone=htmlentities($_POST["telefone"]);

	// gravando dados
	$mysqli->query("insert into fornecedor (nome, cnpj, cep, endereco, telefone) values('$nome', '$cnpj', '$cep', '$endereco', '$telefone')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='index.php'> Voltar</a>";
	}

}
?>