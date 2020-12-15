<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Novo Cliente</h1>
	</div>
	<div align = "left" class="linha9">
		<form method="POST" action="php/insereCliente.php">
			<p>
				Nome do Cliente: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o nome">
				<br/>
				CPF: <input type="text" name="cpf" size="20" maxlength="15" placeholder="Informe o CPF do cliente">		
				<br/>
				RG: <input type="text" name="rg" size="20" maxlength="15" placeholder="Informe o RG dp cliente">
				<br/>
				Data de Nascimento: <input type="text" name="nascimento" size="25" maxlength="10" placeholder="Informe a data de nascimento">
				<br/>
				Endereço: <input type="text" name="endereco" size="50" maxlength="50" placeholder="Informe o endereço">
				<br/><br/>
				<input type="submit" value="Cadastrar" name="cadastreClient">
			</p>
		</form>
	</div>
</body>
</html>

