<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Clientes</h2>
	<a href="adicionarcli.php"><button>Adicionar</button></a>
	<a href="pesquisarcli.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>RG</th>
			<th>Data de Nascimento</th>
			<th>Endereço</th>
		</tr>
		
		<?php 
		// conexao com o banco de dados
		require("conecta.php");
		
		// executar comandos sql
		// consulta registros da tabela
		$query = $mysqli->query("select * from cliente");
		echo $mysqli->error;

		// carrega consulta de registros
		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nome]</td>
			<td align='center'>$tabela[cpf]</td>
			<td align='center'>$tabela[rg]</td>
			<td align='center'>$tabela[nascimento]</td>
			<td align='center'>$tabela[endereco]</td>

			<td width='120'><a href='excluircli.php?excluir=$tabela[id]'>[excluir]</a>
			<a href='alterarcli.php?alterar=$tabela[id]'>[alterar]</a></td>
			</tr>
			";
		}
		?>
	</table>
</body>
</html>