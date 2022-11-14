<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de Serviço</h2>
	<a href="adicionarservice.php"><button>Adicionar</button></a>
	<a href="pesquisarservice.php"><button>Pesquisar</button></a>
	<br />
	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Preço por Hora</th>
			<th>Tempo Previsto</th>
			<th>Tempo Real</th>
			<th>Técnico Responsável</th>
		</tr>
		
		<?php 
		// conexao com o banco de dados
		require("conecta.php");
		
		// executar comandos sql
		// consulta registros da tabela
		$query = $mysqli->query("select * from service");
		echo $mysqli->error;

		// carrega consulta de registros
		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nomeService]</td>
			<td align='center'>$tabela[precoPorHora]</td>
			<td align='center'>$tabela[tempoPrevisto]</td>
			<td align='center'>$tabela[tempoReal]</td>
			<td align='center'>$tabela[tecnicoResponsavel]</td>

			<td width='120'><a href='excluirservice.php?excluir=$tabela[id]'>[excluir]</a>
			<a href='alterarservice.php?alterar=$tabela[id]'>[alterar]</a></td>
			</tr>
			";
		}
		?>
	</table>
</body>
</html>