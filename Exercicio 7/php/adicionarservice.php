<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<div align = "center" class="linha8">
		<h1>Novo Serviço</h1>
	</div>
	<div align = "left" class="linha9">
		<form method="POST" action="php/insereService.php">
			<p>
				Nome do Serviço: <input type="text" name="nome" size="50" maxlength="50" placeholder="Informe o serviço">
				<br/>
				Preço do Hora: <input type="text" name="preco" size="30" maxlength="15" placeholder="Informe o preço do serviço por hora">		
				<br/>
				Tempo Previsto: <input type="text" name="tempoPrevisto" size="30" maxlength="5" placeholder="Informe o tempo previsto">
				<br/>
				Tempo Real: <input type="text" name="tempoReal" size="30" maxlength="5" placeholder="Informe o tempo total do serviço">
				<br/>
				Técnico Responsável: <input type="text" name="tecnicoResponsavel" size="50" maxlength="50" placeholder="Informe o técnico responsável por esse serviço">
				<br/>
				<br/><br/>
				<input type="submit" value="Cadastrar" name="cadService">
			</p>
		</form>
	</div>
</body>
</html>