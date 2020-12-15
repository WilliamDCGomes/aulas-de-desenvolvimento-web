<?php 
	if(isset($_POST["localeCliente"])){

		require("../banco/conecta.php");
		$nomecli=htmlentities($_POST["nomecli"]);

			// gravando dados
		$query = $mysqli->query("select * from cliente where nome like '%$nomecli%'");
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
		<th><p>CPF</p></th>
		<th><p>RG</p></th>
		<th><p>Data de Nascimento</p></th>
		<th><p>Endereço</p></th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'><p>$tabela[id]</p></td>
			<td align='center'><p>$tabela[nome]</p></td>
			<td align='center'><p>$tabela[cpf]</p></td>
			<td align='center'><p>$tabela[rg]</p></td>
			<td align='center'><p>$tabela[nascimento]</p></td>
			<td align='center'><p>$tabela[endereco]</p></td>
			</tr>
			";
		}
		echo "</table>";
        echo "<a href='../index.php'> <p>Voltar</p></a>";
        echo "</div>";
	}
	?>