<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Produtos</h2>
	<a href="adicionarpro.php"><button>Adicionar</button></a>
	<a href="pesquisarpro.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Produto</th>
			<th>Preço</th>
			<th>Ação</th>
		</tr>
		
		<?php 
		// conexao com o banco de dados
		require("conecta.php");
		
		// executar comandos sql
		// consulta registros da tabela
		$query = $mysqli->query("select * from tb_produtos");
		echo $mysqli->error;

		// carrega consulta de registros
		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[idpro]</td>
			<td align='center'>$tabela[produto]</td>
			<td align='center'>$tabela[preco]</td>

			<td width='120'><a href='excluirpro.php?excluir=$tabela[idpro]'>[excluir]</a>
			<a href='alterarpro.php?alterar=$tabela[idpro]'>[alterar]</a></td>
			</tr>
			";
		}
		?>
	</table>
</body>
</html>