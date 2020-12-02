<?php
session_start();
if (isset($_POST["botao"])) {
	$_SESSION["payment"]  = $_POST["payment"];
	$_SESSION["parcela"] = $_POST["parcela"];	
	Header("Location: confirma.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body bgcolor=#6959CD>
	<h2>PRODUTOS </h2>
	<form method = "POST" action="etapa3.php">
		<! acessando dados etapa 3 >

		<h2>Escolha a Forma de pagamento:</h2>
		<select name="payment"> 
			<option value="1" <?php if((isset($_SESSION["payment"])) AND ($_SESSION["payment"] == "1")) echo 'selected="true"' ?>> Boleto </option> 
			<option value="2" <?php if((isset($_SESSION["payment"])) AND ($_SESSION["payment"] == "2")) echo 'selected="true"' ?>> Crédio </option> 
		</select>

		<h2>Número de Parcelas:</h2>
		<select name="parcela">  
			<option value="1" <?php if((isset($_SESSION["parcela"])) AND ($_SESSION["parcela"] == "1")) echo 'selected="true"' ?>> 1 parcelas - Sem Juros </option> 
			<option value="2" <?php if((isset($_SESSION["parcela"])) AND ($_SESSION["parcela"] == "2")) echo 'selected="true"' ?>> 2 parcelas - Sem Juros </option> 
			<option value="3" <?php if((isset($_SESSION["parcela"])) AND ($_SESSION["parcela"] == "3")) echo 'selected="true"' ?>> 3 parcelas - Com 5% de Juros </option>
			<option value="4" <?php if((isset($_SESSION["parcela"])) AND ($_SESSION["parcela"] == "4")) echo 'selected="true"' ?>> 4 parcelas - Com 10% de Juros </option>
			<option value="5" <?php if((isset($_SESSION["parcela"])) AND ($_SESSION["parcela"] == "5")) echo 'selected="true"' ?>> 5 parcelas - Com 15% de Juros </option>
			<option value="6" <?php if((isset($_SESSION["parcela"])) AND ($_SESSION["parcela"] == "6")) echo 'selected="true"' ?>> 6 parcelas - Com 20% de Juros </option>
		</select>
		<br/><br/>
		

		<input type="submit" value="Próximo" name="botao">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset" value="Limpa Formuláio">
	</form>
	<a href="index.php"><button>Voltar</button></a>
</body>
</html>
