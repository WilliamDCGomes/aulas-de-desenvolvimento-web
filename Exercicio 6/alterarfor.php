<?php 
require("conecta.php");

if(isset($_GET["alterar"])){

	$id = htmlentities($_GET["alterar"]);
	$query=$mysqli->query("select * from fornecedor where id = '$id'");
	$tabela=$query->fetch_assoc();
	$nome=$tabela["nome"];
	$cnpj=$tabela["cnpj"];
	$cep=$tabela["cep"];
	$endereco=$tabela["endereco"];
	$telefone=$tabela["telefone"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="alterarfor.php">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		Nome do Fornecedor: <input type="text" name="nome" value="<?php echo $nome ?>">
		<br/>			
		CNPJ: <input type="text" name="cnpj" value="<?php echo $cnpj ?>">
		<br/>
		CEP: <input type="text" name="cep" value="<?php echo $cep ?>">
		<br/>
		Endereço: <input type="text" name="endereco" value="<?php echo $endereco ?>">
		<br/>
		Telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>">
		<br/><br/>
		<input type="submit" value="Salvar" name="botao">
	</form>
	<a href ="index.php"> Voltar </a>
	<br />
</body>
</html>


<?php 
if(isset($_POST["botao"])){

	$id=htmlentities($_POST["id"]);	
	$nome=htmlentities($_POST["nome"]);	
	$cnpj=htmlentities($_POST["cnpj"]);
	$cep=htmlentities($_POST["cep"]);
	$endereco=htmlentities($_POST["endereco"]);
	$telefone=htmlentities($_POST["telefone"]);


	$mysqli->query("update fornecedor set nome = '$nome', cnpj='$cnpj', cep = '$cep', endereco = '$endereco', telefone = '$telefone' where id = '$id'");
	echo $mysqli->error;
	if ($mysqli->error == "") {
		echo "Alterado com sucesso";
	}
}

?>