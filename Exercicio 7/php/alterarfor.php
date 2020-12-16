<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
</head>
<body>
	<div class="topo">
		<div class="left" id="abrir-mapa"></div>

		<div class="right">
			<div class="parte-1" id="abrir-facebook"></div>
			<div class="parte-2" id="abrir-instagram"></div>
			<div class="parte-3" id="chamar-whatsapp"></div>
			<div class="parte-4" id="abrir-linkedin"></div>				
			<div class="parte-5" id="abrir-email"></div>	
		</div>

		<div class="center"></div>
	</div>
	<div class="linha2" align = "Center">
		<?php 
			require("../banco/conecta.php");
			if(isset($_GET["alterar"])){
				$id = htmlentities($_GET["alterar"]);
				$query=$mysqli->query("select * from fornecedor where id = '$id'");
				$tabela=$query->fetch_assoc();
				$nome=$tabela["nome"];
				$cnpj=$tabela["cnpj"];
				$cep=$tabela["cep"];
				$endereco=$tabela["endereco"];
				$telefone=$tabela["telefone"];
			}
		?>
		<div align = "center" class="linha8">
			<h1>Atualizar Fornecedor</h1>
		</div>
		<div align = "center" class="linha9">
			<form method="POST" action="atualizaFornecedor.php">
				<p>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					Nome do Fornecedor: <input type="text" name="nome" value="<?php echo $nome ?>">
					<br/>			
					CNPJ: <input type="text" name="cnpj" value="<?php echo $cnpj ?>">
					<br/>
					CEP: <input type="text" name="cep" value="<?php echo $cep ?>">
					<br/>
					Endereço: <input type="text" name="endereco" value="<?php echo $endereco ?>">
					<br/>
					Telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>">
					<br/><br/>
					<input type="submit" value="Salvar" name="botao">
				</p>
			</form>
			<a href ="../index.php"> Voltar </a>
		</div>
	</div>
	<br />
	<script type="text/javascript" src="js/eventos.js?<?php echo time() ?>"></script>	
</body>
</html>