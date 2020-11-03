<?php
	// dados clientes
$nome 	  = $_POST["nome"];
$fone 	  = $_POST["fone"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro   = $_POST["bairro"];
$estado = $_POST["estado"];

	// orçamento suporte técnico
$codsuporte1 = $_POST["codsuporte1"];
$nivelUrgencia1 = $_POST["nivelUrgencia1"];
if ($codsuporte1 == 2){
	$suporte1="Reparo no Sistema";
	$suportepreco1=80;
}
elseif ($codsuporte1 == 3){
	$suporte1="Treinamento de Utilização do Sistema";
	$suportepreco1=90;
}
elseif ($codsuporte1 == 4){
	$suporte1="Formatação de Máquina";
	$suportepreco1=50;
}
elseif ($codsuporte1 == 5){
	$suporte1="Backup de Dados";
	$suportepreco1=40;
}
else{
	$suporte1="Reparo no Sistema";
	$suportepreco1=80;
}

if ($nivelUrgencia1 == 1){
	$valueUrgencia1 = 0;
}
elseif ($nivelUrgencia1 == 2){
	$valueUrgencia1 = 25;
}
elseif ($nivelUrgencia1 == 3){
	$valueUrgencia1 = 50;
}
else{
	$valueUrgencia1 = 0;
}

$sub1 = $suportepreco1 + $valueUrgencia1;


$codsuporte2 = $_POST["codsuporte2"];
$nivelUrgencia2 = $_POST["nivelUrgencia2"];
if ($codsuporte2 == 2){
	$suporte2="Reparo no Sistema";
	$suportepreco2=80;
}
elseif ($codsuporte2 == 3){
	$suporte2="Treinamento de Utilização do Sistema";
	$suportepreco2=90;
}
elseif ($codsuporte2 == 4){
	$suporte2="Formatação de Máquina";
	$suportepreco2=50;
}
elseif ($codsuporte2 == 5){
	$suporte2="Backup de Dados";
	$suportepreco2=40;
}
else{
	$suporte2=" ";
	$suportepreco2=0;
}

if ($nivelUrgencia2 == 1){
	$valueUrgencia2 = 0;
}
elseif ($nivelUrgencia1 == 2){
	$valueUrgencia2 = 25;
}
elseif ($nivelUrgencia1 == 3){
	$valueUrgencia2 = 50;
}
else{
	$valueUrgencia2 = 0;
}

$sub2 = $suportepreco2 + $valueUrgencia2;


$codsuporte3 = $_POST["codsuporte3"];
$nivelUrgencia3 = $_POST["nivelUrgencia3"];
if ($codsuporte3 == 2){
	$suporte3="Reparo no Sistema";
	$suportepreco3=80;
}
elseif ($codsuporte3 == 3){
	$suporte3="Treinamento de Utilização do Sistema";
	$suportepreco3=90;
}
elseif ($codsuporte3 == 4){
	$suporte3="Formatação de Máquina";
	$suportepreco3=50;
}
elseif ($codsuporte3 == 5){
	$suporte3="Backup de Dados";
	$suportepreco3=40;
}
else{
	$suporte3=" ";
	$suportepreco3=0;
}

if ($nivelUrgencia3 == 1){
	$valueUrgencia3 = 0;
}
elseif ($nivelUrgencia3 == 2){
	$valueUrgencia3 = 25;
}
elseif ($nivelUrgencia3 == 3){
	$valueUrgencia3 = 50;
}
else{
	$valueUrgencia3 = 0;
}

$sub3 = $suportepreco3 + $valueUrgencia3;


$codsuporte4 = $_POST["codsuporte4"];
$nivelUrgencia4 = $_POST["nivelUrgencia4"];
if ($codsuporte4 == 2){
	$suporte4="Reparo no Sistema";
	$suportepreco4=80;
}
elseif ($codsuporte4 == 3){
	$suporte4="Treinamento de Utilização do Sistema";
	$suportepreco4=90;
}
elseif ($codsuporte4 == 4){
	$suporte4="Formatação de Máquina";
	$suportepreco4=50;
}
elseif ($codsuporte4 == 5){
	$suporte4="Backup de Dados";
	$suportepreco4=40;
}
else{
	$suporte4=" ";
	$suportepreco4=0;
}

if ($nivelUrgencia4 == 1){
	$valueUrgencia4 = 0;
}
elseif ($nivelUrgencia4 == 2){
	$valueUrgencia4 = 25;
}
elseif ($nivelUrgencia4 == 3){
	$valueUrgencia4 = 50;
}
else{
	$valueUrgencia4 = 0;
}

$sub4 = $suportepreco4 + $valueUrgencia4;

	// orçamento desenvolvimento web

	$codweb = $_POST["codweb"];
	$urgenciaweb = $_POST["urgenciaweb"];
	if ($codweb == 2){
		$desenvolvimentoweb="Site de Pequeno Porte";
		$webpreco=80;
	}
	elseif ($codweb == 3){
		$desenvolvimentoweb="Site de Médio Porte";
		$webpreco=90;
	}
	elseif ($codweb == 4){
		$desenvolvimentoweb="Site de Grande Porte";
		$webpreco=50;
	}
	else{
		$desenvolvimentoweb=" ";
		$webpreco=0;
	}
	
	if ($urgenciaweb == 1){
		$valueUrgenciaweb = 0;
	}
	elseif ($urgenciaweb == 2){
		$valueUrgenciaweb = 25;
	}
	elseif ($urgenciaweb == 3){
		$valueUrgenciaweb = 50;
	}
	else{
		$valueUrgenciaweb = 0;
	}
	
	$sub5 = $webpreco + $valueUrgenciaweb;


	// pedido sobremesa
$coddoce=$_POST["coddoce"];
if ($coddoce == 1){
	$doce=" ";
	$preco4=0;
}	
elseif ($coddoce == 2){
	$doce="Cocada";
	$preco4=7;
}
elseif ($coddoce == 3){
	$doce="Pé de moleque";
	$preco4=6;
}
else{
	$doce ="Paçoca Doce";
	$preco4=5;
}

$qtddoce=$_POST["qtddoce"];
if ($qtddoce==0){
	$qtddoce=1;
}
$sub4 = $preco4 * $qtddoce;


	// entrega S/N
$codentrega = $_POST["codentrega"];
if ($codentrega == 1){
	$entrega = "Cliente vem retirar na loja";
	$taxaentrega=0;
}
else{
	$entrega = "Entregar no endereço do cliente";		
	$taxaentrega=6;
}

$codpagto=$_POST["codpagto"];
if ($codpagto == 1){
	$fpagto="Cartao de credito";
}
elseif ($codpagto == 2){
	$fpagto="Cartao de debito";
}
else{
	$fpagto="Dinheiro";
}

$receber1 = 0;
$receber2 = 0;
$receber1 = $_POST["receber1"];
$receber2 = $_POST["receber2"];


	// Calculo de Valor a Pagar
$vtotal = $sub1 + $sub2 + $sub3 + $sub4 + $taxaentrega;

	// Mostrar Dados Pedido
echo "<h2><center>Pizzaria Bits e Bytes</center></h2>";
echo "<h3>Dados do Cliente</h3>";	
echo "Cliente: $nome<br />";
echo "Telefone: $fone<br />";
echo "Endereço de entrega: $endereco<br />";
echo "Bairro: $bairro <br /><br />";


echo "<h3>Dados do Pedido</h3>";
echo "A pizza escolhida foi: $pizza1<br />";
echo "O valor da pizza: $preco1<br />";
echo "A quantidade pedida foi: $qtd1<br />";
echo "Subtotal: $sub1 <br /><br />";


if ($codpizza2 <> 1){
	echo "A pizza escolhida foi: $pizza2<br />";
	echo "O valor da pizza: $preco2<br />";
	echo "A quantidade pedida foi: $qtd2<br />";
	echo "Subtotal: $sub2 <br /><br />";		
}

if ($codbebida <> 1){
	echo "A bebida escolhida foi: $bebida<br />";
	echo "O valor da bebida: $preco3<br />";
	echo "A quantidade pedida: foi $qtdbebida<br />";
	echo "Subtotal: $sub3 <br /><br />";
}

if ($coddoce <> 1){
	echo "A Sobremesa escolhida foi: $doce<br />";
	echo "O valor da bebida: $preco4<br />";
	echo "A quantidade pedida: foi $qtddoce<br />";
	echo "Subtotal: $sub4 <br /><br />";
}

echo "<h3>Finalização do Pedido</h3>";
echo "Entrega: $entrega<br />";
if ($codentrega <> 1){
	echo "O valor da entrega: $taxaentrega<br /><br /><br />";
}

if ($receber1 == 1 || $receber2 == 2){
	echo "Ofertas e Promoções:<br/>";
}

if ($receber1 == 1){
	echo "Desejo receber mensagens sobre promoções <br />";
}
if ($receber2 == 1){
	echo "Desejo receber mensagens sobre novos produtos <br />";
}

echo "<h3>Forma de Pagamento</h3>";
echo "Forma de Pagamento: $fpagto<br />";
echo "Valor a pagar: $vtotal<br /><br /><br />";	
?> 


