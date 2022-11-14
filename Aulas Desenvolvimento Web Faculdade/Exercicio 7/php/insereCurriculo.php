<?php 
	if(isset($_POST["cadastreCurriculo"])){
		require("../banco/conecta.php");
		$nome=htmlentities($_POST["nome"]);
		$email=htmlentities($_POST["email"]);
		$endereco=htmlentities($_POST["endereco"]);
		$telefone=htmlentities($_POST["telefone"]);
		$experiencia1=htmlentities($_POST["experiencia1"]);
		$experiencia2=htmlentities($_POST["experiencia2"]);
		$experiencia3=htmlentities($_POST["experiencia3"]);
		$formacao1=htmlentities($_POST["academica1"]);
		$formacao2=htmlentities($_POST["academica2"]);
		$formacao3=htmlentities($_POST["academica3"]);
		$area=htmlentities($_POST["area"]);
		$mysqli->query("insert into trabalheConosco (nome, email, endereco, telefone, experiencia1, experiencia2, experiencia3, formacao1, formacao2, formacao3, area) values('$nome', '$email', '$endereco', '$telefone', '$experiencia1', '$experiencia2', '$experiencia3', '$formacao1', '$formacao2', '$formacao3', '$area')");
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