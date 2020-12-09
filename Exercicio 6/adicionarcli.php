<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="adicionarcli.php">
		Nome do Cliente: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o nome">
		<br/>
		CPF: <input type="text" name="cpf" size="15" maxlength="15" placeholder="Informe o CPF do cliente">		
		<br/>
		RG: <input type="text" name="rg" size="15" maxlength="15" placeholder="Informe o RG dp cliente">
		<br/>
		Data de Nascimento: <input type="text" name="nascimento" size="10" maxlength="10" placeholder="Informe a data de nascimento">
		<br/>
		Endereço: <input type="text" name="endereco" size="50" maxlength="50" placeholder="Informe o endereço">
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
	$cpf=htmlentities($_POST["cpf"]);
	$rg=htmlentities($_POST["rg"]);
	$nascimento=htmlentities($_POST["nascimento"]);
	$endereco=htmlentities($_POST["endereco"]);

	// gravando dados
	$mysqli->query("insert into cliente (nome, cpf, rg, nascimento, endereco) values('$nome', '$cpf', '$rg', '$nascimento', '$endereco')");
	echo $mysqli->error;

	if($mysqli->error == ""){

		echo "<br />Inserido com sucesso<br /></br />";

		echo "<a href='index.php'> Voltar</a>";
	}

}
?>