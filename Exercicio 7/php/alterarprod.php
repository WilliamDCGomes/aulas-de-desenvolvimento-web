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
				$query=$mysqli->query("select * from produto where id = '$id'");
				$tabela=$query->fetch_assoc();
				$nome=$tabela["nomeProd"];
				$custo=$tabela["custo"];
				$preco=$tabela["preco"];
				$quantidade=$tabela["quantidade"];
				$marca=$tabela["marca"];
			}
		?>
		<div align = "center" class="linha8">
			<h1>Atualizar Produto</h1>
		</div>
		<div align = "center" class="linha9">
			<form method="POST" action="atualizaProduto.php">
				<p>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					Nome do Produto: <input type="text" name="nomeProd" value="<?php echo $nome ?>">
					<br/>			
					Custo: <input type="text" name="custo" value="<?php echo $custo ?>">
					<br/>
					Preço: <input type="text" name="preco" value="<?php echo $preco ?>">
					<br/>
					Quantidade: <input type="text" name="quantidade" value="<?php echo $quantidade ?>">
					<br/>
					Marca: <input type="text" name="marca" value="<?php echo $marca ?>">
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


