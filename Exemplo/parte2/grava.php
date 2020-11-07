<?php
$nome	=$_POST["nome"];
$fone	=$_POST["fone"];
$email	=$_POST["email"];
$cidade =$_POST["cidade"];
$idade	=$_POST["idade"];		

echo "Dados do Cliente <br/>";
echo "Nome:    $nome <br/>";
echo "Telefone:$fone <br/>";	
echo "E-mail:  $email <br/>";
echo "Cidade:  $cidade <br/>";
echo "Idade:   $idade <br/>";

	// INSERINDO OS DADOS NO BANCO
	// conectando bando de dados com o formulário
require("conecta_banco.php");

	// gravando dados
$mysqli->query("INSERT INTO amigos VALUES ('$nome','$fone','$email','$cidade','$idade')");
echo $mysqli->error;
?>				

