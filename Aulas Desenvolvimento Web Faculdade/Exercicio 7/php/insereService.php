<?php 
	if(isset($_POST["cadService"])){
		require("../banco/conecta.php");
	
		$nome=htmlentities($_POST["nome"]);	
		$preco=htmlentities($_POST["preco"]);
		$tempoPrevisto=htmlentities($_POST["tempoPrevisto"]);
		$tempoReal=htmlentities($_POST["tempoReal"]);
		$tecnicoResponsavel=htmlentities($_POST["tecnicoResponsavel"]);
	
		$mysqli->query("insert into service (nomeService, precoPorHora, tempoPrevisto, tempoReal, tecnicoResponsavel) values('$nome', '$preco', '$tempoPrevisto', '$tempoReal', '$tecnicoResponsavel')");
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
		}
	}
?>