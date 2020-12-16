<?php 
	if(isset($_POST["localeService"])){

		require("../banco/conecta.php");
		$nome=htmlentities($_POST["servico"]);
		$query = $mysqli->query("select * from service where nomeService like '%$nome%'");
		echo $mysqli->error;
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
		echo "
		<table border='1' width='400'>
		<tr>
		<th><p>Id</th>
		<th><p>Nome</p></th>
		<th><p>Preço por Hora</p></th>
		<th><p>Tempo Previsto</p></th>
		<th><p>Tempo Real</p></th>
		<th><p>Técnico Responsável</p></th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'><p>$tabela[id]</p></td>
			<td align='center'><p>$tabela[nomeService]</p></td>
			<td align='center'><p>$tabela[precoPorHora]</p></td>
			<td align='center'><p>$tabela[tempoPrevisto]</p></td>
			<td align='center'><p>$tabela[tempoReal]</p></td>
			<td align='center'><p>$tabela[tecnicoResponsavel]</p></td>
			</tr>
			";
		}
		echo "</table>";
        echo "<a href='../index.php'> <p>Voltar</p></a>";
        echo "</div>";
	}
	?>