<?php 
require("conecta.php");

if(isset($_GET["alterar"])){

	$id = htmlentities($_GET["alterar"]);
	$query=$mysqli->query("select * from cliente where id = '$id'");
	$tabela=$query->fetch_assoc();
	$nome=$tabela["nome"];
	$cpf=$tabela["cpf"];
	$rg=$tabela["rg"];
	$nascimento=$tabela["nascimento"];
	$endereco=$tabela["endereco"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="alterarcli.php">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		Nome do Cliente: <input type="text" name="nome" value="<?php echo $nome ?>">
		<br/>			
		CPF: <input type="text" name="cpf" value="<?php echo $cpf ?>">
		<br/>
		RG: <input type="text" name="rg" value="<?php echo $rg ?>">
		<br/>
		Data de Nascimento: <input type="text" name="nascimento" value="<?php echo $nascimento ?>">
		<br/>
		Endereço: <input type="text" name="endereco" value="<?php echo $endereco ?>">
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
	$cpf=htmlentities($_POST["cpf"]);
	$rg=htmlentities($_POST["rg"]);
	$nascimento=htmlentities($_POST["nascimento"]);
	$endereco=htmlentities($_POST["endereco"]);


	$mysqli->query("update cliente set nome = '$nome', cpf='$cpf', rg = '$rg', nascimento = '$nascimento', endereco = '$endereco' where id = '$id'");
	echo $mysqli->error;
	if ($mysqli->error == "") {
		echo "Alterado com sucesso";
	}
}

?>