<?php

//Criando a conexão com o banco de dados:

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "curso de php - aula 40 - sistema de login";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()):

	echo "Erro ao se conectar com o banco de dados. Erro: ". mysqli_connect_error();

endif;
