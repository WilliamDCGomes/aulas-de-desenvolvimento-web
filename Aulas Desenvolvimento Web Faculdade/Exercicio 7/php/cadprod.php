<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Edição de Produtos</h1>
	</div>
	<div align = "center" class="linha9">
		<table border="1" width="400">
			<tr>
				<th><p>Id</p></th>
				<th><p>Nome</p></th>
				<th><p>Custo</p></th>
				<th><p>Preço</p></th>
				<th><p>Quantidade</p></th>
				<th><p>Marca</p></th>
			</tr>
			<?php 
				require("banco/conecta.php");
				$query = $mysqli->query("select * from produto");
				echo $mysqli->error;
				while ($tabela = $query->fetch_assoc()){
					echo "
					<tr><td align='center'><p>$tabela[id]</p></td>
					<td align='center'><p>$tabela[nomeProd]</p></td>
					<td align='center'><p>$tabela[custo]</p></td>
					<td align='center'><p>$tabela[preco]</p></td>
					<td align='center'><p>$tabela[quantidade]</p></td>
					<td align='center'><p>$tabela[marca]</p></td>
					<td width='120'><a href='javascript:confirma_exclusaoProduto($tabela[id])'><p>Excluir</p></a>
					<a href='php/alterarprod.php?alterar=$tabela[id]'><p>Alterar</p></a></td>
					</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>