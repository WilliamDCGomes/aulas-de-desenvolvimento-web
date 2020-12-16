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
				<a href="?pagina=5"><div class="botao">Fornecedores</div></a>		
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
						require ("php/produtos.php");
						$valide = false;
					}
					elseif ($pagina == 4) {
						require ("php/service.php");
						$valide = false;
					}	
					elseif ($pagina == 5) {
						require ("php/fornecedor.php");
						$valide = false;
					}
					elseif ($pagina == 6) {
						require ("php/adicionarTrabalhe.php");
						$valide = false;
					}
					elseif ($pagina == 7) {
						require ("php/aboutUs.php");
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
					elseif ($pagina == 11) {
						require ("php/adicionarfor.php");
					}
					elseif ($pagina == 12) {
						require ("php/pesquisarfor.php");
					}	
					elseif ($pagina == 13) {
						require ("php/cadfor.php");
					}	
					elseif ($pagina == 14) {
						require ("php/adicionarservice.php");
					}
					elseif ($pagina == 15) {
						require ("php/pesquisarservice.php");
					}	
					elseif ($pagina == 16) {
						require ("php/cadservice.php");
					}	
					elseif ($pagina == 17) {
						require ("php/adicionarprod.php");
					}
					elseif ($pagina == 18) {
						require ("php/pesquisarprod.php");
					}	
					elseif ($pagina == 19) {
						require ("php/cadprod.php");
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