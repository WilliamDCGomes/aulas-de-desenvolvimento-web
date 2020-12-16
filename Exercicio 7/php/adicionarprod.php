<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Novo Produto</h1>
	</div>
	<div align = "left" class="linha9">
		<form method="POST" action="php/insereProduto.php">
			<p>
				Nome do Produto: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o nome">
				<br/>
				Custo: <input type="text" name="custo" size="20" maxlength="15" placeholder="Informe o custo">		
				<br/>
				Preço: <input type="text" name="preco" size="20" maxlength="15" placeholder="Informe o preço">
				<br/>
				Quantidade: <input type="text" name="quantidade" size="25" maxlength="5" placeholder="Informe a quantidade">
				<br/>
				Marca: <input type="text" name="marca" size="50" maxlength="50" placeholder="Informe a marca">
				<br/><br/>
				<input type="submit" value="Cadastrar" name="cadastreProd">
			</p>
		</form>
	</div>
</body>
</html>

