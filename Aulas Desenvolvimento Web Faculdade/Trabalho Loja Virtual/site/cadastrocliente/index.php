<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Cell Bytes Cadastre</title>
	</head>
	<body>
		<form method="POST" action="recebe.php">
			<div align ="Center">
					<h1>Cell Bytes</h1>
			</div>
			<h3> Dados do Cliente </h3>
			<div align = "Center">
				<fieldset style="width: 30%">
					<div align = "left">
						<?php 
							require("../banco/conecta_banco.php");
							$link = mysqli_connect("localhost", "root", "", "cellBytes");
							$result1 = mysqli_query($link, "SELECT max(idaux) from vendaProduct");
							$compra = 1;
							if($row = mysqli_fetch_row($result1)){
								$compra = $row[0] + 1;
							}
							$result2 = mysqli_query($link, "SELECT nameProduct, price, quant from carrinho where compra = '$compra'");
							while($row = mysqli_fetch_row($result2)){
								$mysqli->query("INSERT INTO vendaProduct (id,nameProduct, price, quant) VALUES ($compra,'$row[0]','$row[1]','$row[2]')");
								echo $mysqli->error;
							}
							echo "<p>Número do Pedido:</p> <input type='text' name= 'pedido' value='$compra' size='5' maxlength='8' /><br />";
						?>
						<p>Nome:</p> <input type="text" name= "nome" size="50" maxlength="50" /><br />
						<p>Telefone:</p> <input type="text" name= "fone" size="20" maxlength="20" /><br />
						<p>Endereço:</p> <input type="text" name= "endereco" size="50" maxlength="50" /><br />
						<p>Nº:</p> <input type="text" name= "numero" size="5" maxlength="8" /><br />
						<p>Bairro:</p> <input type="text" name= "bairro" size="40" maxlength="40" /><br />
						<p>Estado:</p> <select name="estado">
							<option value="0" >	Selecione seu Estado </option>
							<option value="1" >	AC </option>
							<option value="2" > AL </option>
							<option value="3" > AP </option>
							<option value="4" > AM </option>	
							<option value="5" >	BA </option>
							<option value="6" > CE </option>
							<option value="7" > DF </option>
							<option value="8" > ES </option>
							<option value="9" > GO </option>
							<option value="10" > MA </option>
							<option value="11" > MT </option>
							<option value="12" > MS </option>
							<option value="13" > MG </option>
							<option value="14" > PA </option>
							<option value="15" > PB </option>
							<option value="16" > PR </option>
							<option value="17" > PE </option>
							<option value="18" > PI </option>
							<option value="19" > RJ </option>
							<option value="20" > RN </option>
							<option value="21" > RS </option>
							<option value="22" > RO </option>
							<option value="23" > RR </option>
							<option value="24" > SC </option>
							<option value="25" > SP </option>
							<option value="26" > SE </option>
							<option value="27" > TO </option>
						</select> 
						<br />
					</div>
					<br />
				</fieldset>
			</div>
			</br></br>
			<div align = "Center">
				<input type="submit" value="Finalizar Pedido">
			</div>
		</form>
	</body>
</html>
