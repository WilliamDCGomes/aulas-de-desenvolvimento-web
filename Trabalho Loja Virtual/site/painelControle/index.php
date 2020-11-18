<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Paínel de Controle</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div align ="Center">
		<nav>
			<h3>
				<a href="#newUser">NOVO USUÁRIO</a>
				&nbsp&nbsp&nbsp
				<a href="#NewProduct">ADICIONAR PRODUTO</a>
			</h3>					
		</nav>
	</div>
	<br />
	<section id="home">
		<div align ="Center">
				<h1>Cell Bytes</h1>
		</div>
	</section>
	<form method="POST" action="NovoUsuario/recebe.php">
		<section id="newUser">
			<div align ="Center">
				<h2> Novo Usuário </h2>
			</div>
			<div align = "Center">
				<fieldset style="width: 25%">
					<div align = "left">
						<p>Login:</p> <input type="text" name= "nome" size="50" maxlength="50" /><br />
						<p>Senha:</p> <input type="text" name= "senha" size="20" maxlength="20" /><br />
						<br />
					</div>
					<br />
				</fieldset>
			</div>
			</br></br>
			<div align = "Center">
				<input type="submit" value="Cadastrar"> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
				<input type="reset" value="Cancela"> 
			</div>
		</section>
	</form>
	<form method="POST" action="NovoProduto/recebe.php">
		<section id="NewProduct">
			<div align ="Center">
				<h2> Novo Produto </h2>
			</div>
			<div align = "Center">
				<fieldset style="width: 25%">
					<div align = "left">
						<p>Nome do Produto:</p> <input type="text" name= "nome" size="50" maxlength="50" /><br />
						<p>Descrição do Produto:</p> <textarea name="descricao" rows="10" cols="60"></textarea>
						<p>Preço do Produto:</p> <input type="text" name= "price" size="8" maxlength="10" /><br />
						<p>Imagem 1</p> <p1><input type="file" name= "image1"/></p1><br />
						<p>Imagem 2</p> <p1><input type="file" name= "image2"/></p1><br />
						<br />
					</div>
					<br />
				</fieldset>
			</div>
			</br></br>
			<div align = "Center">
				<input type="submit" value="Enviar"> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
				<input type="reset" value="Cancelar"> 
			</div>
		</section>
	</form>
	<div align ="Center">
		<nav>
			<h3>
				<a href="#newUser">NOVO USUÁRIO</a>
				&nbsp&nbsp&nbsp
				<a href="#NewProduct">ADICIONAR PRODUTO</a>
			</h3>					
		</nav>
	</div>
</body>

</html>