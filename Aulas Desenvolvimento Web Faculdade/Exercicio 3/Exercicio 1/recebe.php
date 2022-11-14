<?php
	// dados clientes
$nome 	  = $_POST["nome"];
$fone 	  = $_POST["fone"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro   = $_POST["bairro"];
$estado = $_POST["estado"];
if ($estado == 1){
	$state = "AC";
}
elseif ($estado == 2){
	$state = "AL";
}
elseif ($estado == 3){
	$state = "AP";
}
elseif ($estado == 4){
	$state = "AM";
}
elseif ($estado == 5){
	$state = "BA";
}
elseif ($estado == 6){
	$state = "CE";
}
elseif ($estado == 7){
	$state = "DF";
}
elseif ($estado == 8){
	$state = "ES";
}
elseif ($estado == 9){
	$state = "GO";
}
elseif ($estado == 10){
	$state = "MA";
}
elseif ($estado == 11){
	$state = "MT";
}
elseif ($estado == 12){
	$state = "MS";
}
elseif ($estado == 13){
	$state = "MG";
}
elseif ($estado == 14){
	$state = "PA";
}
elseif ($estado == 15){
	$state = "PB";
}
elseif ($estado == 16){
	$state = "PR";
}
elseif ($estado == 17){
	$state = "PE";
}
elseif ($estado == 18){
	$state = "PI";
}
elseif ($estado == 19){
	$state = "RJ";
}
elseif ($estado == 20){
	$state = "RN";
}
elseif ($estado == 21){
	$state = "RS";
}
elseif ($estado == 22){
	$state = "RO";
}
elseif ($estado == 23){
	$state = "RR";
}
elseif ($estado == 24){
	$state = "SC";
}
elseif ($estado == 25){
	$state = "SP";
}
elseif ($estado == 26){
	$state = "SE";
}
elseif ($estado == 27){
	$state = "TO";
}
else{
	$state = "SP";
}

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
	$urgencia1 = "Sem Urgência";
}
elseif ($nivelUrgencia1 == 2){
	$valueUrgencia1 = 25;
	$urgencia1 = "Moderado";
}
elseif ($nivelUrgencia1 == 3){
	$valueUrgencia1 = 50;
	$urgencia1 = "Com Urgência";
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
	$urgencia2 = "Sem Urgência";
}
elseif ($nivelUrgencia2 == 2){
	$valueUrgencia2 = 25;
	$urgencia2 = "Moderado";
}
elseif ($nivelUrgencia2 == 3){
	$valueUrgencia2 = 50;
	$urgencia2 = "Com Urgência";
}
else{
	$valueUrgencia2 = 0;
	$urgencia2 = "Sem Urgência";
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
	$urgencia3 = "Sem Urgência";
}
elseif ($nivelUrgencia3 == 2){
	$valueUrgencia3 = 25;
	$urgencia3 = "Moderado";
}
elseif ($nivelUrgencia3 == 3){
	$valueUrgencia3 = 50;
	$urgencia3 = "Com Urgência";
}
else{
	$valueUrgencia3 = 0;
	$urgencia3 = "Sem Urgência";
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
	$urgencia4 = "Sem Urgência";
}
elseif ($nivelUrgencia4 == 2){
	$valueUrgencia4 = 25;
	$urgencia4 = "Moderado";
}
elseif ($nivelUrgencia4 == 3){
	$valueUrgencia4 = 50;
	$urgencia4 = "Com Urgência";
}
else{
	$valueUrgencia4 = 0;
	$urgencia4 = "Sem Urgência";
}

$sub4 = $suportepreco4 + $valueUrgencia4;

	// orçamento desenvolvimento web

	$codweb = $_POST["codweb"];
	$urgenciaweb = $_POST["urgenciaweb"];
	if ($codweb == 2){
		$desenvolvimentoweb="Site de Pequeno Porte";
		$webpreco=100;
	}
	elseif ($codweb == 3){
		$desenvolvimentoweb="Site de Médio Porte";
		$webpreco=250;
	}
	elseif ($codweb == 4){
		$desenvolvimentoweb="Site de Grande Porte";
		$webpreco=500;
	}
	else{
		$desenvolvimentoweb=" ";
		$webpreco=0;
	}
	
	if ($urgenciaweb == 1){
		$valueUrgenciaweb = 0;
		$urgencia5 = "Sem Urgência";
	}
	elseif ($urgenciaweb == 2){
		$valueUrgenciaweb = 100;
		$urgencia5 = "Moderado";
	}
	elseif ($urgenciaweb == 3){
		$valueUrgenciaweb = 200;
		$urgencia5 = "Com Urgência";
	}
	else{
		$valueUrgenciaweb = 0;
		$urgencia5 = "Sem Urgência";
	}
	
	$sub5 = $webpreco + $valueUrgenciaweb;


	// orçamento desenvolvimento de software

	$codsoftware = $_POST["codsoftware"];
	$urgenciasoftware = $_POST["urgenciasoftware"];
	if ($codsoftware == 2){
		$desenvolvimentosoftware="Software de Pequeno Porte";
		$softwarepreco=150;
	}
	elseif ($codsoftware == 3){
		$desenvolvimentosoftware="Software de Médio Porte";
		$softwarepreco=300;
	}
	elseif ($codsoftware == 4){
		$desenvolvimentosoftware="Software de Grande Porte";
		$softwarepreco=600;
	}
	else{
		$desenvolvimentosoftware=" ";
		$softwarepreco=0;
	}
	
	if ($urgenciasoftware == 1){
		$valueUrgenciasoftware = 0;
		$urgencia6 = "Sem Urgência";
	}
	elseif ($urgenciasoftware == 2){
		$valueUrgenciasoftware = 100;
		$urgencia6 = "Moderado";
	}
	elseif ($urgenciasoftware == 3){
		$valueUrgenciasoftware = 200;
		$urgencia6 = "Com Urgência";
	}
	else{
		$valueUrgenciasoftware = 0;
		$urgencia6 = "Sem Urgência";
	}
	
	$sub6 = $softwarepreco + $valueUrgenciasoftware;


	// orçamento desenvolvimento mobile

	$codmobile = $_POST["codmobile"];
	$urgenciamobile = $_POST["urgenciamobile"];
	if ($codmobile == 2){
		$desenvolvimentomobile="Aplicações de Pequeno Porte";
		$mobilepreco=80;
	}
	elseif ($codmobile == 3){
		$desenvolvimentomobile="Aplicações de Médio Porte";
		$mobilepreco=160;
	}
	elseif ($codmobile == 4){
		$desenvolvimentomobile="Aplicações de Grande Porte";
		$mobilepreco=320;
	}
	else{
		$desenvolvimentomobile=" ";
		$mobilepreco=0;
	}
	
	if ($urgenciamobile == 1){
		$valueUrgenciamobile = 0;
		$urgencia7 = "Sem Urgência";
	}
	elseif ($urgenciamobile == 2){
		$valueUrgenciamobile = 80;
		$urgencia7 = "Moderado";
	}
	elseif ($urgenciamobile == 3){
		$valueUrgenciamobile = 150;
		$urgencia7 = "Com Urgência";
	}
	else{
		$valueUrgenciamobile = 0;
		$urgencia7 = "Sem Urgência";
	}
	
	$sub7 = $mobilepreco + $valueUrgenciamobile;


	// Consultoria
$codconsultoria = $_POST["codconsultoria"];
if ($codconsultoria == 1){
	$consultoria = "De Forma Remota";
	$taxaconsultoria=0;
}
else{
	$consultoria = "Visita na Loja";		
	$taxaconsultoria=30;
}

$codpagto=$_POST["codpagto"];
if ($codpagto == 1){
	$fpagto="Dinheiro";
}
elseif ($codpagto == 2){
	$fpagto="Cartao de Debito";
}
else{
	$fpagto="Cartao de Credito";
}

$receber1 = 0;
$receber2 = 0;
$receber1 = $_POST["receber1"];
$receber2 = $_POST["receber2"];


	// Calculo de Valor a Pagar
$vtotal = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6 + $sub7 + $taxaconsultoria;

	// Mostrar Dados Pedido
echo "<h2><center>GlassByte Store</center></h2>";
echo "<h3>Dados do Cliente</h3>";	
echo "Cliente: $nome<br />";
echo "Telefone: $fone<br />";
echo "Endereço de entrega: $endereco<br />";
echo "Número da Casa: $numero<br />";
echo "Bairro: $bairro <br />";
echo "Estado: $state <br /><br />";



echo "<h3>Dados do Orçamento</h3>";
echo "O serviço escolhido foi: $suporte1<br />";
echo "Valor do Serviço Escolhido: " . round($suportepreco1, 2) . "<br />";
echo "Urgência do serviço: $urgencia1<br />";
echo "Subtotal: $sub1 <br /><br />";


if ($codsuporte2 <> 1){
	echo "O serviço escolhido foi: $suporte2<br />";
	echo "Valor do Serviço Escolhido: " . round($suportepreco2, 2) . "<br />";
	echo "Urgência do serviço: $urgencia2<br />";
	echo "Subtotal: $sub2 <br /><br />";	
}
if ($codsuporte3 <> 1){
	echo "O serviço escolhido foi: $suporte3<br />";
	echo "Valor do Serviço Escolhido: " . round($suportepreco3, 2) . "<br />";
	echo "Urgência do serviço: $urgencia3<br />";
	echo "Subtotal: $sub3 <br /><br />";	
}
if ($codsuporte4 <> 1){
	echo "O serviço escolhido foi: $suporte4<br />";
	echo "Valor do Serviço Escolhido: " . round($suportepreco4, 2) . "<br />";
	echo "Urgência do serviço: $urgencia4<br />";
	echo "Subtotal: $sub4 <br /><br />";	
}

if ($codweb <> 1){
	echo "O modelo escolhido foi: $desenvolvimentoweb<br />";
	echo "Valor do modelo Escolhido: " . round($webpreco, 2) . "<br />";
	echo "Urgência do serviço: $urgencia5<br />";
	echo "Subtotal: $sub5 <br /><br />";	
}

if ($codsoftware <> 1){
	echo "O modelo escolhido foi: $desenvolvimentosoftware<br />";
	echo "Valor do modelo Escolhido: " . round($softwarepreco, 2) . "<br />";
	echo "Urgência do serviço: $urgencia6<br />";
	echo "Subtotal: $sub6 <br /><br />";	
}

if ($codmobile <> 1){
	echo "O modelo escolhido foi: $desenvolvimentomobile<br />";
	echo "Valor do modelo Escolhido: " . round($mobilepreco, 2) . "<br />";
	echo "Urgência do serviço: $urgencia7<br />";
	echo "Subtotal: $sub7 <br /><br />";	
}

echo "<h3>Finalização do Orçamento</h3>";
echo "Consultoria: $consultoria<br />";
if ($codconsultoria <> 1){
	echo "Valor da consultoria: " . round($taxaconsultoria, 2) . "<br /><br /><br />";
}
else{
	echo "Valor da consultoria: 0,00<br /><br /><br />";
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
echo "Valor a pagar: " . round($vtotal, 2) . "<br /><br /><br />";	
?> 