<?php 
require("conecta.php");
if(isset($_GET["alterar"])){

	$id = htmlentities($_GET["alterar"]);
	$query=$mysqli->query("select * from service where id = '$id'");
	$tabela=$query->fetch_assoc();
	$nomeService=$tabela["nomeService"];
	$precoPorHora=$tabela["precoPorHora"];
	$tempoPrevisto=$tabela["tempoPrevisto"];
	$tempoReal=$tabela["tempoReal"];
	$tecnicoResponsavel=$tabela["tecnicoResponsavel"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="alterarservice.php">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		Nome do Serviço: <input type="text" name="nome" value="<?php echo $nomeService ?>">
		<br/>			
		Preço por Hora: <input type="text" name="preco" value="<?php echo $precoPorHora ?>">
		<br/>
		Tempo Previsto: <input type="text" name="tempoPrevisto" value="<?php echo $tempoPrevisto ?>">
		<br/>
		Tempo Real: <input type="text" name="tempoReal" value="<?php echo $tempoReal ?>">
		<br/>
		Técnico Responsável: <input type="text" name="tecnicoResponsavel" value="<?php echo $tecnicoResponsavel ?>">
		<br/><br/>
		<input type="submit" value="Salvar" name="botao">
	</form>
	<a href ="index.php"> Voltar </a>
	<br />
</body>
</html>


<?php 
if(isset($_POST["botao"])){
	$id2=htmlentities($_POST["id"]);	
	$nome2=htmlentities($_POST["nome"]);	
	$preco2=htmlentities($_POST["preco"]);
	$tempoPrevisto2=htmlentities($_POST["tempoPrevisto"]);
	$tempoReal2=htmlentities($_POST["tempoReal"]);
	$tecnicoResponsavel2=htmlentities($_POST["tecnicoResponsavel"]);


	$mysqli->query("update service set nomeService = '$nome2', precoPorHora='$preco2', tempoPrevisto = '$tempoPrevisto2', tempoReal = '$tempoReal2', tecnicoResponsavel = '$tecnicoResponsavel2' where id = '$id2'  ");
	echo $mysqli->error;
	if ($mysqli->error == "") {
		echo "Alterado com sucesso";
	}
}

?>