<!DOCTYPE html>
<html>
	<head>
		<title>Glass Byte</title>
		<link rel="stylesheet" type="text/css" href="css/layout.css">
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
		<div class="linha1">
			<div class="menu">
				<a href="?pagina=1"><div class="botao">Home</div></a>
				<a href="?pagina=2"><div class="botao">Clientes</div></a>
				<a href="?pagina=3"><div class="botao">Produtos</div></a>
				<a href="?pagina=4"><div class="botao">Serviços</div></a>	
				<a href="?pagina=5"><div class="botao">Parceiros</div></a>		
				<a href="?pagina=6"><div class="botao">Trabalhe Conosco</div></a>	
				<a href="?pagina=7"><div class="botao">Sobre nós</div></a>		
			</div>
		</div>	
		<br>
		<div class="linha2" align = "Center">
			<?php
				$valide = false;
				if (isset($_GET["pagina"])) {
					$pagina = $_GET["pagina"];
					if ($pagina == 1) {
						require ("php/home.php");
						$valide = true;
					}
					elseif ($pagina == 2) {
						require ("php/clientes.php");
						$valide = false;
					}
					elseif ($pagina == 3) {
						require ("php/parceiros.php");
						$valide = false;
					}
					elseif ($pagina == 4) {
						require ("php/galeria.php");
						$valide = false;
					}	
					elseif ($pagina == 8) {
						require ("php/adicionarcli.php");
						
					}
					elseif ($pagina == 9) {
						require ("php/pesquisarcli.php");
					}	
					elseif ($pagina == 10) {
						require ("php/cadcli.php");
					}	
				} 
				else {
					require ("php/home.php");
					$valide = true;
				}
			?>
		</div>	
		<br>
		<?php
			if ($valide) {
				echo"<div class='linha4' align = 'Center'>";
				require ("php/home2.php");
				echo"</div>";
			}
		?>
		<script type="text/javascript" src="js/eventos.js?<?php echo time() ?>"></script>	
	</body>
</html>