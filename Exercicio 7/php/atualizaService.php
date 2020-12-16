<?php 
require("../banco/conecta.php");
if(isset($_POST["botao"])){
	$id2=htmlentities($_POST["id"]);	
	$nome2=htmlentities($_POST["nome"]);	
	$preco2=htmlentities($_POST["preco"]);
	$tempoPrevisto2=htmlentities($_POST["tempoPrevisto"]);
	$tempoReal2=htmlentities($_POST["tempoReal"]);
	$tecnicoResponsavel2=htmlentities($_POST["tecnicoResponsavel"]);
	$mysqli->query("update service set nomeService = '$nome2', precoPorHora='$preco2', tempoPrevisto = '$tempoPrevisto2', tempoReal = '$tempoReal2', tecnicoResponsavel = '$tecnicoResponsavel2' where id = '$id2'  ");
	echo $mysqli->error;
	if ($mysqli->error == "") {
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
        echo "<p>Alterado com sucesso";
        echo "<br>";
		echo "<a href='../index.php'> Voltar</a></p>";
		echo "</div>";
	}
}

?>