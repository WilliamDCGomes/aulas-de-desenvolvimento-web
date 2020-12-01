<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    // recebendo dados cliente - etapa 1
    //codvenda - auto incremento
	$cpf=$_SESSION["cpf"];     
	$email=$_SESSION["email"]; 
	$nome=$_SESSION["nome"]; 

    // recebendo dados pedido - etapa 2
	$codprod1=$_SESSION["codprod1"];
	if ($codprod1==1) {
		$desc1 = "Processador I3";
		$vlrunit1 = 707;
	} elseif ($codprod1==2) {
		$desc1 = "Processador I5";
		$vlrunit1 = 909;
	} elseif ($codprod1==3) {
		$desc1 = "Processador I7";
		$vlrunit1 = 1001;	
	} else {
		$desc1 = "Processador Pentium";
		$vlrunit1 = 505;	
	}
	$qtdade1=$_SESSION["qtdade1"];

	$codprod2=$_SESSION["codprod2"];
	if ($codprod2==1) {
		$desc2 = "Placa Gigabyte";
		$vlrunit2 = 490;
	} elseif ($codprod2==2) {
		$desc2 = "Placa Intel";
		$vlrunit2 = 508;
	} elseif ($codprod2==3) {
		$desc2 = "Placa Asus";
		$vlrunit2 = 715;	
	} else {
		$desc2 = "Placa AMD";
		$vlrunit2 = 129;	
	}
	$qtdade2=$_SESSION["qtdade2"];	

    // calculando pagamento
	$sub1 = ($vlrunit1*$qtdade1);
	$sub2 = ($vlrunit2*$qtdade2);
	$total = $sub1 + $sub2;

    //Confirmando dados do cliente//
	echo "<h2> Confirmando Pedido</h2>";
	echo "<h3> DADOS DO CLIENTE<br /></h3>";
	echo "CPF: $cpf <br/>";
	echo "E-mail: $email <br/>";		
	echo "Nome do Cliente: $nome <br/>";

    //Confirmando dados do pedido//
	echo "<h3> DADOS DO PEDIDO</h3>";
	echo "Processador: $codprod1 <br/>";
	echo "Descrição: $desc1 <br/>";
	echo "Quantidade: $qtdade1 <br/>";
	echo "Valor Unitário: $vlrunit1 </br>";
	echo "Preço: $sub1 <br/><br/>";

	echo "Placa Mãe: $codprod2 <br/>";
	echo "Descrição: $desc2 <br/>";
	echo "Quantidade: $qtdade2 <br/>";
	echo "Valor Unitário: $vlrunit2 </br>";	
	echo "Preço: $sub2 <br/><br/>";	

	echo "Valor Total da Compra: $total <br/><br/>";

	// INSERINDO OS DADOS NO BANCO
	require("conecta_banco.php");
	$mysqli->query("INSERT INTO tbvendas3 VALUES ('', '$cpf', '$email', '$nome', '$codprod1', '$desc1', '$qtdade1', '$vlrunit1', '$sub1', '$codprod2', '$desc2', '$qtdade2', '$vlrunit2', '$sub2', '$total')");
	echo $mysqli->error;
	?>
</form>
<br/><br/>
<a href="index.php"><button>Nova Venda</button></a>
</body>
</html>