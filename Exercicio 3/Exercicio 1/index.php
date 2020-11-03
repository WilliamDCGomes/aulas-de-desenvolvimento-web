<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>GlassByte Store</title>
	</head>
	<body>
		<form method="POST" action="recebe.php">
			<div align ="Center">
					<img src="img1/LogoGlass.png">
			</div>
			<h3> Dados do Cliente </h3>
			<div align = "Center">
				<fieldset style="width: 30%">
					<div align = "left">
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
			<br><br><br>
			<h3> Dados do Orçamento </h3>
			<div align = "Center">
				<fieldset style="width: 39%">	
					<div align = "left">	
						<h4>Suporte Técnico </h4> 
						<select name="codsuporte1" >
							<option value="1" >	Escolha um Serviço </option>
							<option value="2" >	Reparo no Sistema 		- R$ 80,00</option>
							<option value="3" > Treinamento de Utilização do Sistema		- R$ 90,00 </option>
							<option value="4" > Formatação de Máquina 			- R$ 50,00 </option>
							<option value="5" > Backup de Dados			- R$ 40,00 </option>	
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="nivelUrgencia1" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 25,00</option>
							<option value="3" > Com Urgência R$ 50,00</option>	
						</select>
						<br /><br />

						<select name="codsuporte2" >
							<option value="1" >	Escolha um Serviço </option>
							<option value="2" >	Reparo no Sistema 		- R$ 80,00</option>
							<option value="3" > Treinamento de Utilização do Sistema		- R$ 90,00 </option>
							<option value="4" > Formatação de Máquina 			- R$ 50,00 </option>
							<option value="5" > Backup de Dados			- R$ 40,00 </option>	
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="nivelUrgencia2" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 25,00</option>
							<option value="3" > Com Urgência R$ 50,00</option>	
						</select>
						<br /><br />	

						<select name="codsuporte3" >
							<option value="1" >	Escolha um Serviço </option>
							<option value="2" >	Reparo no Sistema 		- R$ 80,00</option>
							<option value="3" > Treinamento de Utilização do Sistema		- R$ 90,00 </option>
							<option value="4" > Formatação de Máquina 			- R$ 50,00 </option>
							<option value="5" > Backup de Dados			- R$ 40,00 </option>	
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="nivelUrgencia3" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 25,00</option>
							<option value="3" > Com Urgência R$ 50,00</option>	
						</select>
						<br /><br />

						<select name="codsuporte4" >
							<option value="1" >	Escolha um Serviço </option>
							<option value="2" >	Reparo no Sistema 		- R$ 80,00</option>
							<option value="3" > Treinamento de Utilização do Sistema		- R$ 90,00 </option>
							<option value="4" > Formatação de Máquina 			- R$ 50,00 </option>
							<option value="5" > Backup de Dados			- R$ 40,00 </option>	
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="nivelUrgencia4" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 25,00</option>
							<option value="3" > Com Urgência R$ 50,00</option>		
						</select>

						<h4>Desenvolvimento WEB </h4> 
						<select name="codweb" >
							<option value="1" >	Escolha um Modelo  </option>	    	
							<option value="2" >	Site de Pequeno Porte - R$ 100,00 </option>
							<option value="3" > Site de Médio Porte	  - R$ 250,00 </option>
							<option value="4" > Site de Grande Porte	  - R$ 500,00 </option>
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="urgenciaweb" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 100,00</option>
							<option value="3" > Com Urgência R$ 200,00</option>				
						</select> 

						<h4>Desenvolvimento de Software </h4> 
						<select name="codsoftware" >
							<option value="1" >	Escolha um Modelo  </option>	    	
							<option value="2" >	Software de Pequeno Porte - R$ 150,00 </option>
							<option value="3" > Software de Médio Porte	  - R$ 300,00 </option>
							<option value="4" > Software de Grande Porte	  - R$ 600,00 </option>
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="urgenciasoftware" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 100,00</option>
							<option value="3" > Com Urgência R$ 200,00</option>			
						</select>

						<h4>Desenvolvimento Mobile </h4> 
						<select name="codsoftware" >
							<option value="1" >	Escolha um Modelo  </option>	    	
							<option value="2" >	Aplicação de Pequeno Porte - R$ 80,00 </option>
							<option value="3" > Aplicação de Médio Porte	  - R$ 160,00 </option>
							<option value="4" > Aplicação de Grande Porte	  - R$ 320,00 </option>
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="urgenciasoftware" >
							<option value="0" > Escolha o Nível de Urgência </option>
							<option value="1" > Sem Urgência </option>
							<option value="2" > Moderado - R$ 80,00</option>
							<option value="3" > Com Urgência R$ 150,00</option>			
						</select>
						<br><br><br>
					</div>
				</fieldset>
			</div>
			<br><br><br>
			<h3> Finalização do Orçamento </h3>
			<div align = "Center">
				<fieldset style="width: 25%">
					<div align = "left">
						<h4>Forma de Pagamento </h4> 
						<select name="codpagto" >
							<option value="1" > Dinheiro </option>	    	
							<option value="2" >	Cartão de Débito  </option>
							<option value="3" >	Cartão de Crédito </option>
						</select> 
						<br />

						<h4>Consultoria </h4>    
						<h5><input type="radio" name="codentrega" value="1" /> <label>De Forma Remota</label> <br/></h5>
						<h5><input type="radio" name="codentrega" value="2" checked/> <label>Visita na Loja - taxa R$ 30,00</label></h5>
						<h4>Ofertas e Promoções </h4>  
						<h5><input type="checkbox" name="receber1" value="1" checked /> 
						<label>Desejo receber mensagens sobre promoções</label></h5>
						<h5><input type="checkbox" name="receber2" value="1" checked /> 
						<label>Desejo receber mensagens sobre nossos serviços</label></h5>
					</div>
				</fieldset>
			</div>
			<br><br><br>
			<div align = "Center">
				<input type="submit" value="Confirmar Pedido"> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
				<input type="reset" value="Cancelar Pedido"> 
			</div>
		</form>
	</body>
</html>
