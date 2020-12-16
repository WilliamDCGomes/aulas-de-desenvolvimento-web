<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Edição de Clientes</h1>
	</div>
	<div align = "center" class="linha9">
		<table border="1" width="400">
			<tr>
				<th><p>Id</p></th>
				<th><p>Nome</p></th>
				<th><p>CPF</p></th>
				<th><p>RG</p></th>
				<th><p>Data de Nascimento</p></th>
				<th><p>Endereço</p></th>
			</tr>
			<?php 
				require("banco/conecta.php");
				$query = $mysqli->query("select * from cliente");
				echo $mysqli->error;
				while ($tabela = $query->fetch_assoc()){
					echo "
					<tr><td align='center'><p>$tabela[id]</p></td>
					<td align='center'><p>$tabela[nome]</p></td>
					<td align='center'><p>$tabela[cpf]</p></td>
					<td align='center'><p>$tabela[rg]</p></td>
					<td align='center'><p>$tabela[nascimento]</p></td>
					<td align='center'><p>$tabela[endereco]</p></td>
					<td width='120'><a href='javascript:confirma_exclusaoCliente($tabela[id])'><p>Excluir</p></a>
					<a href='php/alterarcli.php?alterar=$tabela[id]'><p>Alterar</p></a></td>
					</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>