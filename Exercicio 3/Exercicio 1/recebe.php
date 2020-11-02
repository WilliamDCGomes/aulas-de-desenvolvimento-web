<?php
	// dados clientes
$nome 	  = $_POST["nome"];
$fone 	  = $_POST["fone"];
$endereco = $_POST["endereco"];
$bairro   = $_POST["bairro"];

	// pedido pizza
$codpizza1=$_POST["codpizza1"];
if ($codpizza1 == 1){
	$pizza1="Quatro Queijos";
	$preco1=45;
}
elseif ($codpizza1 == 2){
	$pizza1="Calabresa";
	$preco1=42;
}
elseif ($codpizza1 == 3){
	$pizza1="Margherita ";
	$preco1=47;
}
else{
	$pizza1="Brócolis com Quiabo";
	$preco1=37;
}

$qtd1=$_POST["qtd1"];
$sub1 = $preco1 * $qtd1;


$codpizza2=$_POST["codpizza2"];
if ($codpizza2 == 1){
	$pizza2=" ";
	$preco2=0;
}
elseif ($codpizza2 == 2){
	$pizza2="Quatro Queijos";
	$preco2=45;
}
elseif ($codpizza2 == 3){
	$pizza2="Calabresa";
	$preco2=42;
}
elseif ($codpizza2 == 4){
	$pizza2="Margherita ";
	$preco2=47;
}
else{
	$pizza2="Brócolis com Quiabo";
	$preco2=37;
}

$qtd2=$_POST["qtd2"];
if ($qtd2 == 0){
	$qtd2 = 1;
}
$sub2 = $preco2 * $qtd2;

	// pedido bebida
$codbebida=$_POST["codbebida"];
if ($codbebida == 1){
	$bebida=" ";
	$preco3=0;
}	
elseif ($codbebida == 2){
	$bebida="coca cola";
	$preco3=10;
}
elseif ($codbebida == 3){
	$bebida="guaraná";
	$preco3=9;
}
else{
	$bebida ="suco";
	$preco3=7;
}

$qtdbebida=$_POST["qtdbebida"];
if ($qtdbebida == 0){
	$qtdbebida = 1;
}
$sub3 = $preco3 * $qtdbebida;


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


