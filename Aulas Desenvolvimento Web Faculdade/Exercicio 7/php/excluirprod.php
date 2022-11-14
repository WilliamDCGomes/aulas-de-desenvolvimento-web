<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		if(isset($_GET["excluir"])){
			$id = htmlentities($_GET["excluir"]);
			require("../banco/conecta.php");
			$mysqli->query("delete from produto where id = '$id'");
			echo $mysqli->error;
			if ($mysqli->error==""){
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
				echo "<p>Excluido com Sucesso</p><br />";
				echo "<a href='../index.php'> Voltar</a></p>";
				echo "</div>";
			}
		}
	?>
</body>
</html>