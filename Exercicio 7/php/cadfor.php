<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Edição de Fornecedores</h1>
	</div>
	<div align = "center" class="linha9">
		<table border="1" width="400">
			<tr>
				<th><p>Id</p></th>
				<th><p>Nome</p></th>
				<th><p>CNPJ</p></th>
				<th><p>CEP</p></th>
				<th><p>Endereço</p></th>
				<th><p>Telefone</p></th>
			</tr>
			<?php 
				require("banco/conecta.php");
				$query = $mysqli->query("select * from fornecedor");
				echo $mysqli->error;
				while ($tabela = $query->fetch_assoc()){
					echo "
					<tr><td align='center'><p>$tabela[id]</p></td>
					<td align='center'><p>$tabela[nome]</p></td>
					<td align='center'><p>$tabela[cnpj]</p></td>
					<td align='center'><p>$tabela[cep]</p></td>
					<td align='center'><p>$tabela[endereco]</p></td>
					<td align='center'><p>$tabela[telefone]</p></td>
					<td width='120'><a href='javascript:confirma_exclusaoFornecedor($tabela[id])'><p>Excluir</p></a>
					<a href='php/alterarfor.php?alterar=$tabela[id]'><p>Alterar</p></a></td>
					</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>