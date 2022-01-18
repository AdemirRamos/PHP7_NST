<?php

    //Normalmente, as Superglobais "$_POST" e "$_GET" são usadas para coletar dados de formulários.

    //Agora, a informação passada para o "input nome" do formulário, será capturada pelo "$_post" e passada para a variável "nome".

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "O seu nome é '$nome' e o seu e-mail é '$email'.";

    echo '<hr>';

    echo 'Resultado: ';

    var_dump($_POST);

?>
