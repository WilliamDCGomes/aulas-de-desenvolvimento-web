<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<form method="POST" action="validaLogin.php">
		<div align ="Center">
				<h1>Cell Bytes</h1>
		</div>
		<div align ="Center">
			<h2> Faça Login </h2>
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
			<input type="submit" value="Login"> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
			<input type="reset" value="Cancela"> 
		</div>
	</form>
</body>

</html>