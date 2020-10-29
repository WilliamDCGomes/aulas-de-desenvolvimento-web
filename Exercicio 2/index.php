<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 2</title>
</head>
<body bgcolor="#9370DB">
	<form method="POST" action="execute.php">
		<div align ="Center">
			<h1>
				Will Store
			</h1>
		</div>
		<h2>
			CLIENTES
			<br>
			-----------------------------------------------------------------------------
		</h2>
		<h3>
			Cliente
		</h3>
		
		<br>
			Nome: <input type="text" name= "nome_cli" size="50" maxlength="45" />
		<br />
			Idade: <input type="text" name= "age_cli" size="8" maxlength="10"/>
		<br />
			Endereço: <input type= "text" name="adress_cli" size="50" maxlength="45"/>
		<br />
			Telefone: <input type= "text" name="phone_cli" size="30" maxlength="25"/>
		<br />
			CPF: <input type= "text" name="cpf_cli" size="20" maxlength="15"/>
		<br />
		<br><br>
		<h2>
			PRODUTOS
			<br>
			-----------------------------------------------------------------------------
		</h2>
		<h3>Produto 1</h3>
		<br>
			Nome: <input type="text" name= "name_product1" size="50" maxlength="45" />
		<br />
			Preço: <input type="text" name= "price_product1" size="8" maxlength="10"/>
		<br />
			Cor: <input type= "text" name="color_product1" size="20" maxlength="15"/>
		<br />
			Quantidade: <input type= "text" name="quantity_product1" size="8" maxlength="5"/>
		<br />
		<h3>
			-----------------------------------------------------------------------------
			<br>
			Produto 2
		</h3>
		<br>
			Nome: <input type="text" name= "name_product2" size="50" maxlength="45" />
		<br />
			Preço: <input type="text" name= "price_product2" size="8" maxlength="10"/>
		<br />
			Cor: <input type= "text" name="color_product2" size="20" maxlength="15"/>
		<br />
			Quantidade: <input type= "text" name="quantity_product2" size="8" maxlength="5"/>
		<br />
		<h3>
			-----------------------------------------------------------------------------
			<br>
			Produto 3
		</h3>
		<br>
			Nome: <input type="text" name= "name_product3" size="50" maxlength="45" />
		<br />
			Preço: <input type="text" name= "price_product3" size="8" maxlength="10"/>
		<br />
			Cor: <input type= "text" name="color_product3" size="20" maxlength="15"/>
		<br />
			Quantidade: <input type= "text" name="quantity_product3" size="8" maxlength="5"/>
		<br />
		<h3>
			-----------------------------------------------------------------------------
			<br>
			Produto 4
		</h3>
		<br>
			Nome: <input type="text" name= "name_product4" size="50" maxlength="45" />
		<br />
			Preço: <input type="text" name= "price_product4" size="8" maxlength="10"/>
		<br />
			Cor: <input type= "text" name="color_product4" size="20" maxlength="15"/>
		<br />
			Quantidade: <input type= "text" name="quantity_product4" size="8" maxlength="5"/>
		<br />
		<h3>
			-----------------------------------------------------------------------------
			<br>
			Produto 5
		</h3>
		<br>
			Nome: <input type="text" name= "name_product5" size="50" maxlength="45" />
		<br />
			Preço: <input type="text" name= "price_product5" size="8" maxlength="10"/>
		<br />
			Cor: <input type= "text" name="color_product5" size="20" maxlength="15"/>
		<br />
		Quantidade: <input type= "text" name="quantity_product5" size="8" maxlength="5"/>
		<br />
		<br><br>
		<h2>
			FORMA DE ENTREGA
			<br>
			-----------------------------------------------------------------------------
		</h2>		
		<br>
			Rua: <input type="text" name= "street_delivery" size="50" maxlength="45" />
		<br />
			Número: <input type="text" name= "number_house" size="4" maxlength="6"/>
		<br />
			UF: <input type= "text" value="SP" name="uf_adress" size="5" maxlength="2"/>
		<br />
			Bairro: <input type= "text" name="neighborhood" size="50" maxlength="45"/>
		<br />
			Referência: <input type= "text" name="reference" size="50" maxlength="45"/>
		<br />
		<br>
		<h3>
			-----------------------------------------------------------------------------
			<br>
			Confirma Preenchimento?
		</h3>
		<input type="submit" value="Finalizar Pedido"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Resetar"> 
	</form>
</body>
</html>