<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisarservice.php">
		Nome do Serviço: <input type="text" name="servico" maxlength="30" placeholder="Informe o serviço">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
	if(isset($_POST["botao"])){

		require("conecta.php");
		$nome=htmlentities($_POST["servico"]);

			// gravando dados
		$query = $mysqli->query("select * from service where nomeService like '%$nome%'");
		echo $mysqli->error;

		echo "
		<table border='1' width='400'>
		<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Preço por Hora</th>
		<th>Tempo Previsto</th>
		<th>Tempo Real</th>
		<th>Técnico Responsável</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nomeService]</td>
			<td align='center'>$tabela[precoPorHora]</td>
			<td align='center'>$tabela[tempoPrevisto]</td>
			<td align='center'>$tabela[tempoReal]</td>
			<td align='center'>$tabela[tecnicoResponsavel]</td>
			</tr>
			";
		}
		echo "</table>";

	}
	?>
	<a href='index.php'> Voltar</a>
</body>
</html>

