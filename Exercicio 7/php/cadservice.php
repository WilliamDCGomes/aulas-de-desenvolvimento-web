<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Edição de Serviços</h1>
	</div>
	<div align = "center" class="linha9">
		<table border="1" width="400">
			<tr>
				<th><p>Id</p></th>
				<th><p>Nome</p></th>
				<th><p>Preço por Hora</p></th>
				<th><p>Tempo Previsto</p></th>
				<th><p>Tempo Real</p></th>
				<th><p>Técnico Responsável</p></th>
			</tr>
			<?php 
				require("banco/conecta.php");
				$query = $mysqli->query("select * from service");
				echo $mysqli->error;
				while ($tabela = $query->fetch_assoc()){
					echo "
					<tr><td align='center'><p>$tabela[id]</p></td>
					<td align='center'><p>$tabela[nomeService]</p></td>
					<td align='center'><p>$tabela[precoPorHora]</p></td>
					<td align='center'><p>$tabela[tempoPrevisto]</p></td>
					<td align='center'><p>$tabela[tempoReal]</p></td>
					<td align='center'><p>$tabela[tecnicoResponsavel]</p></td>
					<td width='120'><a href='javascript:confirma_exclusaoService($tabela[id])'><p>Excluir</p></a>
					<a href='php/alterarservice.php?alterar=$tabela[id]'><p>Alterar</p></a></td>
					</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>