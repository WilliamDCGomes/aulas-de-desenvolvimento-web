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
	$nome=$_SESSION["name"];     
	$rg=$_SESSION["rg"]; 
	$cpf=$_SESSION["cpf"]; 
	$age=$_SESSION["age"]; 
	$email=$_SESSION["email"]; 
	$phone=$_SESSION["phone"]; 

    // recebendo dados pedido - etapa 2
	$codprod1=$_SESSION["codprod1"];
	if ($codprod1==1) {
		$desc1 = "Sistema Básico";
		$vlrunit1 = 100;
	} elseif ($codprod1==2) {
		$desc1 = "Sistema Médio";
		$vlrunit1 = 200;
	} elseif ($codprod1==3) {
		$desc1 = "Sistema Grande";
		$vlrunit1 = 400;	
	}
	$qtdade1=$_SESSION["qtdade1"];

	$codprod2=$_SESSION["codprod2"];
	if ($codprod2==1) {
		$desc2 = "Site Básico";
		$vlrunit2 = 80;
	} elseif ($codprod2==2) {
		$desc2 = "Site Médio";
		$vlrunit2 = 160;
	} elseif ($codprod2==3) {
		$desc2 = "Site Grande";
		$vlrunit2 = 320;	
	}
	$qtdade2=$_SESSION["qtdade2"];	

	$codprod3=$_SESSION["codprod3"];
	if ($codprod3==1) {
		$desc3 = "Aplicativo Básico";
		$vlrunit3 = 60;
	} elseif ($codprod3==2) {
		$desc3 = "Aplicativo Médio";
		$vlrunit3 = 120;
	} elseif ($codprod3==3) {
		$desc3 = "Aplicativo Grande";
		$vlrunit3 = 240;	
	}
	$qtdade3=$_SESSION["qtdade3"];	

	$codprod4=$_SESSION["codprod4"];
	if ($codprod4==1) {
		$desc4 = "Joguinho Básico";
		$vlrunit4 = 40;
	} elseif ($codprod4==2) {
		$desc4 = "Jogo Intermediário";
		$vlrunit4 = 120;
	} elseif ($codprod4==3) {
		$desc4 = "Jogo Grande";
		$vlrunit4 = 360;	
	}
	$qtdade4=$_SESSION["qtdade4"];	

    // calculando pagamento
	$sub1 = ($vlrunit1*$qtdade1);
	$sub2 = ($vlrunit2*$qtdade2);
	$sub3 = ($vlrunit3*$qtdade3);
	$sub4 = ($vlrunit4*$qtdade4);
	$total = $sub1 + $sub2 + $sub3 + $sub4;

	//Recebendo dados da etapa3
	$descPayment = "";
	$payment=$_SESSION["payment"];
	if ($payment==1) {
		$descPayment = "Boleto";
	} 
	elseif ($payment==2) {
		$descPayment = "Crédio";
	}

	$parcela=$_SESSION["parcela"];
	$acrescimo = 0;
	$descParcela = "";
	if ($parcela==1) {
		$descParcela = "1 parcelas - Sem Juros";
	} 
	elseif ($parcela==2) {
		$descParcela = "2 parcelas - Sem Juros";
	}
	elseif ($parcela==3) {
		$descParcela = "3 parcelas - Com 5% de Juros";
		$acrescimo = ($total * 5) / 100;
	}
	elseif ($parcela==4) {
		$descParcela = "4 parcelas - Com 10% de Juros";
		$acrescimo = ($total * 10) / 100;
	}
	elseif ($parcela==5) {
		$descParcela = "5 parcelas - Com 15% de Juros";
		$acrescimo = ($total * 15) / 100;
	}
	elseif ($parcela==6) {
		$descParcela = "6 parcelas - Com 20% de Juros";
		$acrescimo = ($total * 20) / 100;
	}
	$total += $acrescimo;

    //Confirmando dados do cliente//
	echo "<h2> Confirmando Pedido</h2>";
	echo "<h3> DADOS DO CLIENTE<br /></h3>";
	echo "NOME: $nome <br/>";
	echo "RG: $rg <br/>";		
	echo "CPF: $cpf <br/>";
	echo "IDADE: $age <br/>";		
	echo "EMAIL: $email <br/>";		
	echo "TELEFONE: $phone <br/>";

    //Confirmando dados do pedido//
	echo "<h3> DADOS DO PEDIDO</h3>";
	echo "Sistema: $codprod1 <br/>";
	echo "Descrição: $desc1 <br/>";
	echo "Quantidade: $qtdade1 <br/>";
	echo "Valor Unitário: $vlrunit1 </br>";
	echo "Preço: $sub1 <br/><br/>";

	echo "Site: $codprod2 <br/>";
	echo "Descrição: $desc2 <br/>";
	echo "Quantidade: $qtdade2 <br/>";
	echo "Valor Unitário: $vlrunit2 </br>";	
	echo "Preço: $sub2 <br/><br/>";	

	echo "Aplicativo: $codprod3 <br/>";
	echo "Descrição: $desc3 <br/>";
	echo "Quantidade: $qtdade3 <br/>";
	echo "Valor Unitário: $vlrunit3 </br>";
	echo "Preço: $sub3 <br/><br/>";

	echo "Jogo: $codprod4 <br/>";
	echo "Descrição: $desc4 <br/>";
	echo "Quantidade: $qtdade4 <br/>";
	echo "Valor Unitário: $vlrunit4 </br>";	
	echo "Preço: $sub4 <br/><br/>";	

	echo "Valor Total da Compra: $total <br/><br/>";

	//Confirmando Forma de Pagamento
	echo "<h3> DADOS DO PAGAMENTO</h3>";
	echo "Forma de Pagamento: $descPayment <br/>";
	echo "Parcelas: $descParcela <br/>";
	echo "Valor Acrescento: $acrescimo <br/>";

	// INSERINDO OS DADOS NO BANCO
	require("conecta_banco.php");
	$mysqli->query("INSERT INTO client (nameClient, rg, cpf, age, email, phone) VALUES ('$nome', '$rg', '$cpf', '$age', '$email', '$phone')");

	$mysqli->query("INSERT INTO vendaProduct (codProd, nameProduct, quantity, price, subPrice) VALUES ('$codprod1', '$desc1', '$qtdade1', '$vlrunit1', '$sub1')");
	$mysqli->query("INSERT INTO vendaProduct (codProd, nameProduct, quantity, price, subPrice) VALUES ('$codprod2', '$desc2', '$qtdade2', '$vlrunit2', '$sub2')");
	$mysqli->query("INSERT INTO vendaProduct (codProd, nameProduct, quantity, price, subPrice) VALUES ('$codprod3', '$desc3', '$qtdade3', '$vlrunit3', '$sub3')");
	$mysqli->query("INSERT INTO vendaProduct (codProd, nameProduct, quantity, price, subPrice) VALUES ('$codprod4', '$desc4', '$qtdade4', '$vlrunit4', '$sub4')");

	$mysqli->query("INSERT INTO paymentForm (descPayment, descParcela, descont) VALUES ('$descPayment', '$descParcela', '$acrescimo')");
	echo $mysqli->error;
	?>
</form>
<br/><br/>
<a href="index.php"><button>Nova Venda</button></a>
</body>
</html>