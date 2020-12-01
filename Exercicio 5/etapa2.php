<?php
session_start();
$erro_quantidade1 = "";
$erro_quantidade2 = "";
$erro_quantidade3 = "";
$erro_quantidade4 = "";
$erro_selecao1 = "";
$erro_selecao2 = "";
$erro_selecao3 = "";
$erro_selecao4 = "";
$erro_validacao = 0;

if (isset($_POST["botao"])) {
	$_SESSION["codprod1"]  = $_POST["codprod1"];
	$_SESSION["qtdade1"] = $_POST["qtdade1"];
	$_SESSION["codprod2"]  = $_POST["codprod2"];
	$_SESSION["qtdade2"] = $_POST["qtdade2"];	
	$_SESSION["codprod3"]  = $_POST["codprod3"];
	$_SESSION["qtdade3"] = $_POST["qtdade3"];	
	$_SESSION["codprod4"]  = $_POST["codprod4"];
	$_SESSION["qtdade4"] = $_POST["qtdade4"];	

	if ($_SESSION["qtdade1"] < 1) {
		$erro_quantidade1 = "<span style='color:red'>Preencher Quantidade</span>";
		$erro_validacao ++;
	}

	if ($_SESSION["qtdade2"] < 1) {
		$erro_quantidade2 = "<span style='color:red'>Preencher Quantidade</span>";
		$erro_validacao ++;
	}

	if ($_SESSION["qtdade3"] < 1) {
		$erro_quantidade3 = "<span style='color:red'>Preencher Quantidade</span>";
		$erro_validacao ++;
	}

	if ($_SESSION["qtdade4"] < 1) {
		$erro_quantidade4 = "<span style='color:red'>Preencher Quantidade</span>";
		$erro_validacao ++;
	}

	if($_SESSION["codprod1"] == "0"){
		$erro_selecao1 = "Selecione um serviço";
		$erro_validacao ++;
	}

	if($_SESSION["codprod2"] == "0"){
		$erro_selecao2 = "Selecione um serviço";
		$erro_validacao ++;
	}

	if($_SESSION["codprod3"] == "0"){
		$erro_selecao3 = "Selecione um serviço";
		$erro_validacao ++;
	}

	if($_SESSION["codprod4"] == "0"){
		$erro_selecao4 = "Selecione um serviço";
		$erro_validacao ++;
	}

	if ($erro_validacao == 0) {
		Header("Location: confirma.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body bgcolor=#6959CD>
	<h2>PRODUTOS </h2>
	<form method = "POST" action="etapa2.php">
		<! acessando dados etapa 2 >

		<h2>Escolha o Sistema Desktop:</h2>
		Sistemas:<br/> 
		<select name="codprod1"> 
			<option value="0" <?php if((isset($_SESSION["codprod1"])) AND ($_SESSION["codprod1"] == "0")) echo 'selected="true"' ?>> Selecionar </option> 
			<option value="1" <?php if((isset($_SESSION["codprod1"])) AND ($_SESSION["codprod1"] == "1")) echo 'selected="true"' ?>> Sistema Básico - R$ 100,00 </option> 
			<option value="2" <?php if((isset($_SESSION["codprod1"])) AND ($_SESSION["codprod1"] == "2")) echo 'selected="true"' ?>> Sistema Médio  -  R$ 200,00 </option> 
			<option value="3" <?php if((isset($_SESSION["codprod1"])) AND ($_SESSION["codprod1"] == "3")) echo 'selected="true"' ?>> Sistema Grande - R$ 400,00 </option>
		</select>
		<?php echo $erro_selecao1 ?><br/>
		<br/> 
		Quantidade de Sistemas:<br/> 
		<input type="text" name="qtdade1" size="1" maxlength="1" 
		value="<?php if (isset($_SESSION["qtdade1"])) echo $_SESSION["qtdade1"] ?>" />
		<?php echo $erro_quantidade1 ?>
		<br/><br/> 

		<h2>Escolha o Porte do Site:</h2>
		Sites:<br/> 
		<select name="codprod2"> 
			<option value="0" <?php if((isset($_SESSION["codprod2"])) AND ($_SESSION["codprod2"] == "0")) echo 'selected="true"' ?>> Selecionar </option> 
			<option value="1" <?php if((isset($_SESSION["codprod2"])) AND ($_SESSION["codprod2"] == "1")) echo 'selected="true"' ?>> Site Básico - R$ 80,00 </option> 
			<option value="2" <?php if((isset($_SESSION["codprod2"])) AND ($_SESSION["codprod2"] == "2")) echo 'selected="true"' ?>> Site Médio  -  R$ 160,00 </option> 
			<option value="3" <?php if((isset($_SESSION["codprod2"])) AND ($_SESSION["codprod2"] == "3")) echo 'selected="true"' ?>> Site Grande - R$ 320,00 </option>
		</select>
		<?php echo $erro_selecao2 ?><br/>
		<br/> 
		Quantidade de Sites:<br/> 
		<input type="text" name="qtdade2" size="1" maxlength="1" 
		value="<?php if (isset($_SESSION["qtdade2"])) echo $_SESSION["qtdade2"] ?>" />
		<?php echo $erro_quantidade2 ?>
		<br/><br/> 	

		<h2>Aplicativo Mobile:</h2>
		Aplicativos:<br/> 
		<select name="codprod3"> 
			<option value="0" <?php if((isset($_SESSION["codprod3"])) AND ($_SESSION["codprod3"] == "0")) echo 'selected="true"' ?>> Selecionar </option> 
			<option value="1" <?php if((isset($_SESSION["codprod3"])) AND ($_SESSION["codprod3"] == "1")) echo 'selected="true"' ?>> Aplicativo Básico - R$ 60,00 </option> 
			<option value="2" <?php if((isset($_SESSION["codprod3"])) AND ($_SESSION["codprod3"] == "2")) echo 'selected="true"' ?>> Aplicativo Médio  -  R$ 120,00 </option> 
			<option value="3" <?php if((isset($_SESSION["codprod3"])) AND ($_SESSION["codprod3"] == "3")) echo 'selected="true"' ?>> Aplicativo Grande - R$ 240,00 </option>
		</select>
		<?php echo $erro_selecao3 ?><br/>
		<br/> 
		Quantidade de Aplicativos:<br/> 
		<input type="text" name="qtdade3" size="1" maxlength="1" 
		value="<?php if (isset($_SESSION["qtdade3"])) echo $_SESSION["qtdade3"] ?>" />
		<?php echo $erro_quantidade1 ?>
		<br/><br/> 

		<h2>Jogo Mobile:</h2>
		Jogos:<br/> 
		<select name="codprod4"> 
			<option value="0" <?php if((isset($_SESSION["codprod4"])) AND ($_SESSION["codprod4"] == "0")) echo 'selected="true"' ?>> Selecionar </option> 
			<option value="1" <?php if((isset($_SESSION["codprod4"])) AND ($_SESSION["codprod4"] == "1")) echo 'selected="true"' ?>> Joguinho Básico - R$ 40,00 </option> 
			<option value="2" <?php if((isset($_SESSION["codprod4"])) AND ($_SESSION["codprod4"] == "2")) echo 'selected="true"' ?>> Jogo Intermediário  -  R$ 120,00 </option> 
			<option value="3" <?php if((isset($_SESSION["codprod4"])) AND ($_SESSION["codprod4"] == "3")) echo 'selected="true"' ?>> Jogo Grande - R$ 360,00 </option>
		</select>
		<?php echo $erro_selecao4 ?><br/>
		<br/> 
		Quantidade de Jogos:<br/> 
		<input type="text" name="qtdade4" size="1" maxlength="1" 
		value="<?php if (isset($_SESSION["qtdade4"])) echo $_SESSION["qtdade4"] ?>" />
		<?php echo $erro_quantidade2 ?>
		<br/><br/><br/><br/> 	 	

		<input type="submit" value="Próximo" name="botao">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset" value="Limpa Formuláio">
	</form>
	<a href="index.php"><button>Voltar</button></a>
</body>
</html>
