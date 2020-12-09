<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisarcli.php">
		Nome do Cliente: <input type="text" name="nomecli" maxlength="40" placeholder="Informe o nome">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("conecta.php");
		$nomecli=htmlentities($_POST["nomecli"]);

			// gravando dados
		$query = $mysqli->query("select * from cliente where nome like '%$nomecli%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>CPF</th>
		<th>RG</th>
		<th>Data de Nascimento</th>
		<th>Endereço</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nome]</td>
			<td align='center'>$tabela[cpf]</td>
			<td align='center'>$tabela[rg]</td>
			<td align='center'>$tabela[nascimento]</td>
			<td align='center'>$tabela[endereco]</td>
			</tr>
			";
		}
		echo "</table>";

	}
	?>
	<a href='index.php'> Voltar</a>
</body>
</html>

