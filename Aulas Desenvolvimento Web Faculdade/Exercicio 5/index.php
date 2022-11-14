<?php
session_start();
$erro_name = "";
$erro_rg = "";
$erro_cpf = "";
$erro_age = "";
$erro_email = "";
$erro_phone = "";
$erro_validation = 0;

if (isset($_POST["botao"])) {
	$_SESSION["name"]  = $_POST["name"];
	$_SESSION["rg"] = $_POST["rg"];
	$_SESSION["cpf"]  = $_POST["cpf"];
	$_SESSION["age"]  = $_POST["age"];
	$age = $_POST["age"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["phone"]  = $_POST["phone"];
	$phone = $_POST["phone"];

		
	if ($_SESSION["name"] == "") {
		$erro_name = "<span style='color:red'>Preencha o Nome</span>";
		$erro_validation ++;
	} 
	if ($_SESSION["rg"] == "") {
		$erro_rg = "<span style='color:red'>Preencha o RG</span>";
		$erro_validation ++;
	} 
	if ($_SESSION["cpf"] == "") {
		$erro_cpf = "<span style='color:red'>Preencha o CPF</span>";
		$erro_validation ++;
	} 
	if ($_SESSION["age"] == "") {
		$erro_age = "<span style='color:red'>Preencha a sua Idade</span>";
		$erro_validation ++;
	} 
	if ($_SESSION["email"] == "") {
		$erro_email = "<span style='color:red'>Preencha o seu E-mail</span>";
		$erro_validation ++;
	} 
	if ($_SESSION["phone"] == "") {
		$erro_phone = "<span style='color:red'>Preencha o seu Telefone</span>";
		$erro_validation ++;
	} 
	$x = 0;
	while($phone>1){
		$phone /= 10;
		$x++;
	}
	if($x < 9 || $x > 15){
		$erro_phone = "<span style='color:red'>O Telefone deve ter de 9 a 15 digitos!</span>";
		$erro_validation ++;
	}
	if ($erro_validation == 0 ) {
		if($age >= 18){
			Header("Location: etapa2.php");
		}
		else{
			$erro_age = "<span style='color:red'>Idade deve ser maior ou igual a 18 anos</span>";
		}
	}
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Vendas</title>
</head>
<body bgcolor=#6959CD>
	<h2>CLIENTE</h2>
	<form method="POST" action="index.php"> <br/>
			Nome:  <input type="text" name="name" size="60" maxlength="50" 
			value="<?php if (isset($_SESSION["name"])) echo $_SESSION["name"] ?>">
			<?php echo $erro_name ?> 
			<br/>

			RG:  <input type="text" name="rg" size="15" maxlength="15" 
			value="<?php if (isset($_SESSION["rg"])) echo $_SESSION["rg"] ?>">
			<?php echo $erro_rg ?>
			<br/>	

			CPF:  <input type="text" name="cpf" size="20" maxlength="20" 
			value="<?php if (isset($_SESSION["cpf"])) echo $_SESSION["cpf"] ?>">
			<?php echo $erro_cpf ?>
			<br/>

			Digite sua idade:  <input type="text" name="age" size="10" maxlength="10" 
			value="<?php if (isset($_SESSION["age"])) echo $_SESSION["age"] ?>">
			<?php echo $erro_age ?>
			<br/>		

			E-mail: <input type="text" name="email" size="50" maxlength="50" 
			value="<?php if (isset($_SESSION["email"])) echo $_SESSION["email"] ?>"> 
			<?php echo $erro_email ?>
			<br/>

			Telefone:  <input type="text" name="phone" size="20" maxlength="20" 
			value="<?php if (isset($_SESSION["phone"])) echo $_SESSION["phone"] ?>">
			<?php echo $erro_phone ?>
			<br/><br/><br/><br/>	

			<input type="submit" value="Próximo" name="botao">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="reset" value="Limpa Formulário">
	</form>
</body>
</html>










