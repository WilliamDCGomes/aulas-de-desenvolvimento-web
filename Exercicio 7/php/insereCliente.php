<?php 
	if(isset($_POST["cadastreClient"])){
		require("../banco/conecta.php");

		$nome=htmlentities($_POST["nome"]);	
		$cpf=htmlentities($_POST["cpf"]);
		$rg=htmlentities($_POST["rg"]);
		$nascimento=htmlentities($_POST["nascimento"]);
		$endereco=htmlentities($_POST["endereco"]);

		$mysqli->query("insert into cliente (nome, cpf, rg, nascimento, endereco) values('$nome', '$cpf', '$rg', '$nascimento', '$endereco')");
		echo $mysqli->error;

		if($mysqli->error == ""){
			echo "<link rel='stylesheet' type='text/css' href='../css/layout.css'>";
			echo "<div class='topo'>";
			echo "<div class='left' id='abrir-mapa'></div>";
			echo "<div class='right'>";
			echo "<div class='parte-1' id='abrir-facebook'></div>";
			echo "<div class='parte-2' id='abrir-instagram'></div>";
			echo "<div class='parte-3' id='chamar-whatsapp'></div>";
			echo "<div class='parte-4' id='abrir-linkedin'></div>";			
			echo "<div class='parte-5' id='abrir-email'></div>";	
			echo "</div>";
			echo "<div class='center'></div>";
			echo "</div>";	
			echo "<div class='linha2' align = 'Center'>";
			echo "<p>Inserido com sucesso<br />";
			echo "<a href='../index.php'> Voltar</a></p>";
			echo "</div>";
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
		}
	}
?>