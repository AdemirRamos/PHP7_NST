<?php
	
	//Incluindo o arquivo "db_connection.php" para verificar se o usuário está cadastrado no banco de dados:

	require_once 'db_connection.php';

	//Iniciando a sessão:

	session_start();

	if (isset($_POST['botão-entrar'])): //Caso exista o índice "botão-entrar" || Caso o "botão-entrar" seja clicado.

		$erros = array();

		//Verificando os dados passados (usando uma função "mysqli" para filtrar os dados):

		$login = mysqli_escape_string($connect, $_POST['login']);
		$senha = mysqli_escape_string($connect, $_POST['senha']);

		//Caso se esteja usando o phpMyAdmin com uma senha criptografada com MD5, digite o seguinte para o funcionamento correto:

		$senha = md5($senha);

		//Parâmetros: 1ª: conexão com o banco de dados; 2ª: a variável que contem o dado. - arquivos vindos de "db_connection.php".

		//Verificando se algum dos campos veio vazio:

		if (empty($login) or empty($senha)):

			//Nesse caso, passamos uma mensagem de erro para o vetor "$erros":

			$erros[] = "<li style='margin-bottom: 15px; color: red;'>
							O (s) campo (s) \"Login\" e/ou \"Senha\" precisa (m) ser preenchido (s).
						</li>";

		else:

			//Verificando se o "login" e "senha" batem com os dados salvos no banco de dados:

			$sql = "SELECT login FROM usuários WHERE login = '$login'";

			//Criando uma variável para armazenar o resultado da consulta acima:

			$resultado = mysqli_query($connect, $sql); //Parâmetros: 1ª: conexão; 2ª: comando SQL.

			//Verificando se o "login" fornecido pelo usuário existe no banco de dados:

			if (mysqli_num_rows($resultado) > 0):

				//Verificando se a senha digitada bate com a senha do banco de dados:

				$sql = "SELECT * FROM usuários WHERE login = '$login' AND senha = '$senha'";

				$resultado = mysqli_query($connect, $sql);

				if (mysqli_num_rows($resultado) == 1):

					//Passando as variáveis "$resultado" das duas consultas para a variável "$dados" convertidas em vetor.

					$dados = mysqli_fetch_array($resultado);
					mysqli_close($connect);

					//Criando duas sessões:

					$_SESSION['logado'] = true;
					$_SESSION['id_usuário'] = $dados['id'];

					//Redirecionando o usuário:

					header('Location: home.php');

				else:

					$erros[] = "<li style='margin-bottom: 15px; color: red;'>
									Erro! Usuário e/ou senha incorreto (s).
								</li>";

				endif;

			else:

				$erros[] = "<li style='margin-bottom: 15px; color: red;'>
								Erro! Usuário inexistente.
							</li>";

			endif; 

		endif;

	endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 41 - Sistema de Login (PHP Procedural) [Parte 2]</title>

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

	<?php

		//Verificando se há algum erro:

		if (!empty($erros)): //Se "$erros" não estiver vazio, faça:

			foreach($erros as $erro): //Para cada "$erros", mostrar "$erro".

				echo $erro;

			endforeach;

		endif;

	?>

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
