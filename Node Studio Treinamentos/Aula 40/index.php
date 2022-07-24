<?php

	if (isset($_POST['botão-entrar'])): //Caso exista o índice "botão-entrar" || Caso o "botão-entrar" seja clicado.

		echo "<li style='color: green;'>Clicou!</li>";

	endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 40 - Sistema de Login (PHP Procedural) [Parte 1]</title>

	<style type="text/css">
		
		.bloco {
			display: block;
		}

		.marginRight1 {
			margin-right: 5px;
		}

		.marginBottom {
			margin-bottom: 15px;
		}

	</style>

</head>

<body>
	
	<h1>Login</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<!--Caso não seja especificado um documento para "action", os dados serão processados nesta página.-->
		<!--Ainda sim, (e caso se deseje que esta página seja o documento-destino), recomenda-se especificá-la.-->
		
		<div class="bloco marginBottom">

			<label for="nome_id" class="marginRight1">Nome:</label>
			<input type="text" name="login" id="login_id">

		</div>

		<div class="bloco marginBottom">

			<label for="senha_id" class="marginRight1">Senha:</label>
			<input type="password" name="senha" id="senha_id">

		</div>

		<div class="bloco">
			
			<button type="submit" name="botão-entrar">Entrar</button>

		</div>

	</form>

</body>

</html>
