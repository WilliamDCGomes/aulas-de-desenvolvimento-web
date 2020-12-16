<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Cadastre sua Informações</h1>
	</div>
	<div align = "left" class="linha9">
		<form method="POST" action="php/insereCurriculo.php">
			<p>
				Nome: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe seu nome">
				<br/>
				Email: <input type="text" name="email" size="50" maxlength="50" placeholder="Informe seu email">		
				<br/>
				Endereço: <input type="text" name="endereco" size="50" maxlength="50" placeholder="Informe seu endereço">
				<br/>
				Telefone: <input type="text" name="telefone" size="25" maxlength="15" placeholder="Informe seu Telefone">
				<br/>
				Experiência Profissional 1: <input type="text" name="experiencia1" size="50" maxlength="50" placeholder="Informe uma experiência">
				<br/>
				Experiência Profissional 2: <input type="text" name="experiencia2" size="50" maxlength="50" placeholder="Informe uma experiência">
				<br/>
				Experiência Profissional 3: <input type="text" name="experiencia3" size="50" maxlength="50" placeholder="Informe uma experiência">
				<br/>
				Formação Acadêmica 1: <input type="text" name="academica1" size="50" maxlength="50" placeholder="Informe uma formação acadêmica">
				<br/>
				Formação Acadêmica 2: <input type="text" name="academica2" size="50" maxlength="50" placeholder="Informe uma formação acadêmica">
				<br/>
				Formação Acadêmica 3: <input type="text" name="academica3" size="50" maxlength="50" placeholder="Informe uma formação acadêmica">
				<br/>
				Área de Interesse: <input type="text" name="area" size="30" maxlength="30" placeholder="Informe uma área de interesse">
				<br/><br/>
				<input type="submit" value="Cadastrar" name="cadastreCurriculo">
			</p>
		</form>
	</div>
</body>
</html>

