<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cell Bytes Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <form method="POST" action="recebe.php">
        <div align ="Center">
                <h1>Cell Bytes</h1>
        </div>
        <?php
            $login	  = $_POST["nome"];
            $senha	  = $_POST["senha"];
            require("conecta_banco.php");
            $link = mysqli_connect("localhost", "root", "", "cellBytes");
            $result = mysqli_query($link, "SELECT loginName from logins where loginName = '$login' and password = MD5('$senha')");
            if($row = mysqli_fetch_row($result)){
                echo "<div align = 'Center'>";
                echo "<h2>Usuário Válido!</h2>";
                echo "<h3>";
                echo "<a href='../painelControle/index.php'>Entrar</a>";
                echo "</h3>";
                echo "</div>";
            }
            else{
                echo "<div align = 'Center'>";
                echo "<h2>Usuário incorreto! </h2>";
                echo "</br>";
                echo "<h3>";
                echo "<a href='index.php'>Resetar</a>";
                echo "</h3>";
                echo "</div>";
            }
        ?>
    </form>
</body>

</html>