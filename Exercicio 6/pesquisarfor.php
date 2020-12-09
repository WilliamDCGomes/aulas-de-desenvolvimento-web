<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisarfor.php">
		Nome do Fornecedor: <input type="text" name="nome" maxlength="40" placeholder="Informe o nome">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("conecta.php");
		$nome=htmlentities($_POST["nome"]);

			// gravando dados
		$query = $mysqli->query("select * from fornecedor where nome like '%$nome%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>CNPJ</th>
		<th>CEP</th>
		<th>Endereço</th>
		<th>Telefone</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nome]</td>
			<td align='center'>$tabela[cnpj]</td>
			<td align='center'>$tabela[cep]</td>
			<td align='center'>$tabela[endereco]</td>
			<td align='center'>$tabela[telefone]</td>
			</tr>
			";
		}
		echo "</table>";

	}
	?>
	<a href='index.php'> Voltar</a>
</body>
</html>

