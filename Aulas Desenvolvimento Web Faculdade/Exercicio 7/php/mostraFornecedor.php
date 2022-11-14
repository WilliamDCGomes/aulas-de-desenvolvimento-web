<?php 
	if(isset($_POST["localeFornecedor"])){

		require("../banco/conecta.php");
		$nome=htmlentities($_POST["nome"]);
		$query = $mysqli->query("select * from fornecedor where nome like '%$nome%'");
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
		<th><p>CNPJ</p></th>
		<th><p>CEP</p></th>
		<th><p>Endereço</p></th>
		<th><p>Telefone</p></th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'><p>$tabela[id]</p></td>
			<td align='center'><p>$tabela[nome]</p></td>
			<td align='center'><p>$tabela[cnpj]</p></td>
			<td align='center'><p>$tabela[cep]</p></td>
			<td align='center'><p>$tabela[endereco]</p></td>
			<td align='center'><p>$tabela[telefone]</p></td>
			</tr>
			";
		}
		echo "</table>";
        echo "<a href='../index.php'> <p>Voltar</p></a>";
        echo "</div>";
	}
	?>