<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Novo Fornecedor</h1>
	</div>
	<div align = "left" class="linha9">
		<form method="POST" action="php/insereFornecedor.php">
			<p>
				Nome do Fornecedor: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o nome">
				<br/>
				CNPJ: <input type="text" name="cnpj" size="20" maxlength="20" placeholder="Informe o CNPJ">		
				<br/>
				CEP: <input type="text" name="cep" size="15" maxlength="15" placeholder="Informe o CEP">
				<br/>
				Endereço: <input type="text" name="endereco" size="50" maxlength="50" placeholder="Informe o endereço">
				<br/>
				Telefone: <input type="text" name="telefone" size="15" maxlength="15" placeholder="Informe o telefone">
				<br/>
				<br/><br/>
				<input type="submit" value="Cadastrar" name="cadastreForn">
			</p>
		</form>
	</div>
</body>
</html>