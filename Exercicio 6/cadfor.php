<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Fornecedores</h2>
	<a href="adicionarfor.php"><button>Adicionar</button></a>
	<a href="pesquisarfor.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>CNPJ</th>
			<th>CEP</th>
			<th>Endereço</th>
			<th>Telefone</th>
		</tr>
		
		<?php 
		// conexao com o banco de dados
		require("conecta.php");
		
		// executar comandos sql
		// consulta registros da tabela
		$query = $mysqli->query("select * from fornecedor");
		echo $mysqli->error;

		// carrega consulta de registros
		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nome]</td>
			<td align='center'>$tabela[cnpj]</td>
			<td align='center'>$tabela[cep]</td>
			<td align='center'>$tabela[endereco]</td>
			<td align='center'>$tabela[telefone]</td>

			<td width='120'><a href='excluirfor.php?excluir=$tabela[id]'>[excluir]</a>
			<a href='alterarfor.php?alterar=$tabela[id]'>[alterar]</a></td>
			</tr>
			";
		}
		?>
	</table>
</body>
</html>