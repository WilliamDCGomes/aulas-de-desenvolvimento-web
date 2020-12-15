<?php 
require("../banco/conecta.php");

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
	<div align = "center" class="linha8">
		<h1>Atualizar Cliente</h1>
	</div>
	<div align = "center" class="linha9">
		<form method="POST" action="atualizaCliente.php">
			<p>
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
			</p>
		</form>
		<a href ="../index.php"> Voltar </a>
	</div>
	<br />
</body>
</html>


