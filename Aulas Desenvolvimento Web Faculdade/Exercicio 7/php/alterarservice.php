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
					$query=$mysqli->query("select * from service where id = '$id'");
					$tabela=$query->fetch_assoc();
					$nomeService=$tabela["nomeService"];
					$precoPorHora=$tabela["precoPorHora"];
					$tempoPrevisto=$tabela["tempoPrevisto"];
					$tempoReal=$tabela["tempoReal"];
					$tecnicoResponsavel=$tabela["tecnicoResponsavel"];
				}
			?>
			<div align = "center" class="linha8">
				<h1>Atualizar Serviço</h1>
			</div>
			<div align = "center" class="linha9">
				<form method="POST" action="atualizaService.php">
					<p>
						<input type="hidden" name="id" value="<?php echo $id ?>">
						Nome do Serviço: <input type="text" name="nome" value="<?php echo $nomeService ?>">
						<br/>			
						Preço por Hora: <input type="text" name="preco" value="<?php echo $precoPorHora ?>">
						<br/>
						Tempo Previsto: <input type="text" name="tempoPrevisto" value="<?php echo $tempoPrevisto ?>">
						<br/>
						Tempo Real: <input type="text" name="tempoReal" value="<?php echo $tempoReal ?>">
						<br/>
						Técnico Responsável: <input type="text" name="tecnicoResponsavel" value="<?php echo $tecnicoResponsavel ?>">
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