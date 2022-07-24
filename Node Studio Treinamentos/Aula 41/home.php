<?php

	//Pegando o nome de usuário digitado pelo usuário:

	require_once 'db_connection.php';

	session_start();

	//Impedindo o usuário de entrar na página digitando somente a URL desta página.

	if (!isset($_SESSION['logado'])): //Se a sessão não existe. - Também poderia ser a sessão "usuário".

		header('Location: index.php');

	endif;

	//Obtendo os dados do usuário:

	$id = $_SESSION['id_usuário'];
	$sql = "SELECT * FROM usuários WHERE id = '$id'";

	$resultado = mysqli_query($connect, $sql);

	$dados = mysqli_fetch_array($resultado);

	//Recomenda-se sempre fechar a conexão após a consulta:

	mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>

</head>

<body>
	
	<!--Exibindo o nome de usuário:-->

	<h1>Bem-vindo (a), <?php echo /*$_SESSION['id_usuário']*/ $dados['nome']; ?>!</h1>

	<a href="logout.php">Logout/Sair</a>

</body>

</html>
