<?php

    //Normalmente, as Superglobais "$_POST" e "$_GET" são usadas para coletar dados de formulários.

    //Agora, a informação passada para o "input nome" do formulário, será capturada pelo "$_post" e passada para a variável "nome".

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $idade = $_GET['idade'];

    print "O seu nome é '$nome', a sua idade é '$idade' e o seu e-mail é '$email'.";
    
    print '<hr>';

    print 'Resultado: ';

    var_dump($_GET);

?>
