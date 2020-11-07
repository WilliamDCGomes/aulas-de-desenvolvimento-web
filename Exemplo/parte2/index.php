<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>PHP - Aula 1</title>
</head>
<body bgcolor="#B0C4DE">
	<form method="POST" action="grava.php">
		<h2 align="center">Cadastro de Clientes</h2>
		<fieldset style="width: 50%">
			<legend> Dados Pessoais</legend>
			Nome:    <input type="text" name="nome"   size="45" maxlength="40" /><br />
			Telefone:<input type="text" name="fone"   size="25" maxlength="20" /><br />
			E-mail:  <input type="text" name="email"  size="45" maxlength="40" /><br />	
			Cidade:  <input type="text" name="cidade" size="30" maxlength="25" /><br />
			Idade:   <input type="text" name="idade"  size="4"  maxlength="2"  /><br />			
		</fieldset>
		<br />

		<h2>Confirma Preenchimento?</h2>
		<input type="submit" value="Enviar formulário"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Apagar tudo"> 
	</form>
</body>		