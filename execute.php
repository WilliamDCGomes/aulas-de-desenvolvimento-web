<?php
$clienteName =$_POST["nome_cli"];
$ageClient =$_POST["age_cli"];
$adressClient =$_POST["adress_cli"];
$phoneClient =$_POST["phone_cli"];
$cpfClient =$_POST["cpf_cli"];

$productName1 	=$_POST["name_product1"];
$productPrice1	    =$_POST["price_product1"];
$productColor1	=$_POST["color_product1"];
$productQuantity1 =$_POST["quantity_product1"];

$subtotal1 		=0;

$subtotal1 = $productPrice1 * $productQuantity1;

$productName1 	=$_POST["name_product1"];
$productPrice1	    =$_POST["price_product1"];
$productColor1	=$_POST["color_product1"];
$productQuantity1 =$_POST["quantity_product1"];


$productName2 	=$_POST["name_product2"];
$productPrice2	    =$_POST["price_product2"];
$productColor2	=$_POST["color_product2"];
$productQuantity2 =$_POST["quantity_product2"];
$subtotal2 		=0;

$subtotal2 = $productPrice2 * $productQuantity2;


$productName3 	=$_POST["name_product3"];
$productPrice3	    =$_POST["price_product3"];
$productColor3	=$_POST["color_product3"];
$productQuantity3 =$_POST["quantity_product3"];
$subtotal3 		=0;

$subtotal3 = $productPrice3 * $productQuantity3;


$productName4 	=$_POST["name_product4"];
$productPrice4	    =$_POST["price_product4"];
$productColor4	=$_POST["color_product4"];
$productQuantity4 =$_POST["quantity_product4"];
$subtotal4 		=0;

$subtotal4 = $productPrice4 * $productQuantity4;

$productName5 	=$_POST["name_product5"];
$productPrice5	    =$_POST["price_product5"];
$productColor5	=$_POST["color_product5"];
$productQuantity5 =$_POST["quantity_product5"];
$subtotal5 		=0;

$subtotal5 = $productPrice5 * $productQuantity5;

$total = $subtotal1 + $subtotal2 + $subtotal3 + $subtotal4 + $subtotal5;


$streetDelivery =$_POST["street_delivery"];
$numberHouse =$_POST["number_house"];
$ufAdress =$_POST["uf_adress"];
$neighborhoodAdress =$_POST["neighborhood"];
$refereceAdress =$_POST["reference"];


echo "Dados Do Cliente<br/><br/>";
echo "Nome do Cliente: $clienteName <br/>";
echo "Idade: $ageClient <br/>";
echo "Endereço: $adressClient <br/>";	
echo "Telefone: $phoneClient <br/>";	
echo "CPF: $cpfClient <br/><br/><br/>";


echo "Dados Do Pedido<br/><br/>";
echo "Produto 1<br/>";
echo "Nome do Produto: $productName1 <br/>";
echo "Preço: $productPrice1 <br/>";
echo "Cor: $productColor1 <br/>";	
echo "Quantidade: $productQuantity1 <br/>";
echo "Subtotal: $subtotal1 <br/><br/>";

echo "Produto 2<br/>";
echo "Nome do Produto: $productName2 <br/>";
echo "Preço: $productPrice2 <br/>";
echo "Cor: $productColor2 <br/>";	
echo "Quantidade: $productQuantity2 <br/>";
echo "Subtotal: $subtotal2 <br/><br/>";

echo "Produto 3<br/>";
echo "Nome do Produto: $productName3 <br/>";
echo "Preço: $productPrice3 <br/>";
echo "Cor: $productColor3 <br/>";	
echo "Quantidade: $productQuantity3 <br/>";
echo "Subtotal: $subtotal3 <br/><br/>";

echo "Produto 4<br/>";
echo "Nome do Produto: $productName4 <br/>";
echo "Preço: $productPrice4 <br/>";
echo "Cor: $productColor4 <br/>";	
echo "Quantidade: $productQuantity4 <br/>";
echo "Subtotal: $subtotal4 <br/><br/>";

echo "Produto 5<br/>";
echo "Nome do Produto: $productName5 <br/>";
echo "Preço: $productPrice5 <br/>";
echo "Cor: $productColor5 <br/>";	
echo "Quantidade: $productQuantity5 <br/>";
echo "Subtotal: $subtotal5 <br/><br/>";

echo "Total = $total <br/><br/><br/>"; 

echo "Forma de Entrega<br/><br/>";
echo "Rua: $streetDelivery <br/>";
echo "Número da Casa: $numberHouse <br/>";
echo "Estado: $ufAdress <br/>";
echo "Bairro: $neighborhoodAdress <br/>";
echo "Referência: $refereceAdress <br/>";
?>
