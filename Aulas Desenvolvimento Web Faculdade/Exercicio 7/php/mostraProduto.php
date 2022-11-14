<?php 
	if(isset($_POST["localeProduto"])){

		require("../banco/conecta.php");
		$nome=htmlentities($_POST["nome"]);
		$query = $mysqli->query("select * from produto where nomeProd like '%$nome%'");
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
		<th><p>Id</p></th>
		<th><p>Nome</p></th>
		<th><p>Custo</p></th>
		<th><p>Preço</p></th>
		<th><p>Quantidade</p></th>
		<th><p>Marca</p></th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'><p>$tabela[id]</p></td>
			<td align='center'><p>$tabela[nomeProd]</p></td>
			<td align='center'><p>$tabela[custo]</p></td>
			<td align='center'><p>$tabela[preco]</p></td>
			<td align='center'><p>$tabela[quantidade]</p></td>
			<td align='center'><p>$tabela[marca]</p></td>
			</tr>
			";
		}
		echo "</table>";
        echo "<a href='../index.php'> <p>Voltar</p></a>";
        echo "</div>";
	}
	?>