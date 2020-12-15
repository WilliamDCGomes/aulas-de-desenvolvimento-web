<?php 
	if(isset($_POST["localeCliente"])){

		require("../banco/conecta.php");
		$nomecli=htmlentities($_POST["nomecli"]);

			// gravando dados
		$query = $mysqli->query("select * from cliente where nome like '%$nomecli%'");
		echo $mysqli->error;
        echo "<div align = 'center' class='linha8'>";
		echo "
		<table border='1' width='400'>
		<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>CPF</th>
		<th>RG</th>
		<th>Data de Nascimento</th>
		<th>Endereço</th>
		</tr>
		";
		while ($tabela=$query->fetch_assoc()) {
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nome]</td>
			<td align='center'>$tabela[cpf]</td>
			<td align='center'>$tabela[rg]</td>
			<td align='center'>$tabela[nascimento]</td>
			<td align='center'>$tabela[endereco]</td>
			</tr>
			";
		}
		echo "</table>";
        echo "<a href='../index.php'> Voltar</a>";
        echo "</div>";
	}
	?>