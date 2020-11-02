<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="recebe.php">
		<h2 align="center">Pizzaria Bits e Bytes</h2>
		<h3> Dados do Cliente </h3>
		<fieldset style="width: 50%">
			Nome: <input type="text" name= "nome" size="40" maxlength="40" /><br />
			Telefone: <input type="text" name= "fone" size="20" maxlength="20" /><br />
			Endereço: <input type="text" name= "endereco" size="40" maxlength="40" /><br />
			Bairro: <input type="text" name= "bairro" size="20" maxlength="20" /><br />
		</fieldset>

		<h3> Dados do Pedido </h3>
		<fieldset style="width: 50%">		
			<h4>Pizzas </h4> 
			<select name="codpizza1" >
				<option value="1" >	Quatro Queijos 		- R$ 45,00 </option>
				<option value="2" > Calabresa 			- R$ 42,00 </option>
				<option value="3" > Margherita 			- R$ 47,00 </option>
				<option value="4" > Brócolis com Quiabo - R$ 37,00 </option>	
			</select> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="qtd1" >
				<option value="1" >	1 </option>
				<option value="2" > 2 </option>
				<option value="3" > 3 </option>
				<option value="4" > 4 </option>				
			</select>
			<br /><br />

			<select name="codpizza2" >
				<option value="1" > ------------------- 			</option>			
				<option value="2" >	Quatro Queijos 		- R$ 45,00 	</option>
				<option value="3" > Calabresa 			- R$ 42,00 	</option>
				<option value="4" > Margherita 			- R$ 47,00 	</option>
				<option value="5" > Brócolis com Quiabo - R$ 47,00 	</option>	
			</select> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="qtd2" >
				<option value="0" >	- </option>       		
				<option value="1" >	1 </option>
				<option value="2" > 2 </option>
				<option value="3" > 3 </option>
				<option value="4" > 4 </option>				
			</select>	

			<h4>Bebidas </h4> 
			<select name="codbebida" >
				<option value="1" >	-------------------  </option>	    	
				<option value="2" >	Coca Cola - R$ 10,00 </option>
				<option value="3" > Guaraná	  - R$  9,00 </option>
				<option value="4" > Suco	  - R$  7,00 </option>
			</select> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="qtdbebida" >
				<option value="0" >	- </option>       		
				<option value="1" >	1 </option>
				<option value="2" > 2 </option>
				<option value="3" > 3 </option>
				<option value="4" > 4 </option>				
			</select> 
			<h4>Sobremesa </h4> 
			<select name="coddoce" >
				<option value="1" >	-------------------  </option>	    	
				<option value="2" >	Cocada 			- R$ 7,00 </option>
				<option value="3" > Pé de Moleque	- R$ 6,00 </option>
				<option value="4" > Paçoca Doce	  	- R$ 5,00 </option>
			</select> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="qtddoce" >
				<option value="0" >	- </option>       		
				<option value="1" >	1 </option>
				<option value="2" > 2 </option>
				<option value="3" > 3 </option>
				<option value="4" > 4 </option>				
			</select>
		</fieldset>

		<h3> Finalização do Pedido </h3>
		<fieldset style="width: 50%">
			<h4>Forma de Pagamento </h4> 
			<select name="codpagto" >
				<option value="1" >	Cartão de Crédito </option>	    	
				<option value="2" >	Cartão de Débito  </option>
				<option value="3" > Dinheiro		  </option>
			</select> 
			<br />

			<h4>Entrega </h4>                                          
			<input type="radio" name="codentrega" value="1" checked /> Retirar na loja  <br/>
			<input type="radio" name="codentrega" value="2" /> Entregar no Endereço - taxa R$ 6,00

			<h4>Ofertas e Promoções </h4>  
			<input type="checkbox" name="receber1" value="1" checked /> 
			Desejo receber mensagens sobre promoções<br />
			<input type="checkbox" name="receber2" value="1" checked /> 
			Desejo receber mensagens sobre novos produtos
		</fieldset>
		<br /><br />

		<input type="submit" value="Confirmar Pedido"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
		<input type="reset" value="Cancelar Pedido"> 
		
	</form>
</body>
</html>
