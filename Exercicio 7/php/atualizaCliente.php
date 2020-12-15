<?php 
require("../banco/conecta.php");
if(isset($_POST["botao"])){

	$id=htmlentities($_POST["id"]);	
	$nome=htmlentities($_POST["nome"]);	
	$cpf=htmlentities($_POST["cpf"]);
	$rg=htmlentities($_POST["rg"]);
	$nascimento=htmlentities($_POST["nascimento"]);
	$endereco=htmlentities($_POST["endereco"]);


	$mysqli->query("update cliente set nome = '$nome', cpf='$cpf', rg = '$rg', nascimento = '$nascimento', endereco = '$endereco' where id = '$id'");
	echo $mysqli->error;
	if ($mysqli->error == "") {
        echo "Alterado com sucesso";
        echo "<br>";
        echo "<a href='../index.php'> Voltar</a>";
	}
}

?>