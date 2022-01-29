<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>

</head>

<body>
    
    <?php
    
        //"cookie" é um arquivo criado pelo servidor, no computador do usuário, que serve para armazenar um conjunto de informações.

        //Criando um "cookie":

        setcookie('usuário', 'Ademir Ramos', time() - 3600);

        //O primeiro parâmetro representa o nome do "cookie"; o segundo representa o valor do "cookie" e o terceiro a validade.

        //P. S.: 3600 == 1 hora.

        setcookie('email', 'ademirramos@gmail.com', time() - 3600);

        setcookie('útlima_pesquisa', 'tênis Adidas', time() - 3600);

        print "Resultado: ";

        print var_dump($_COOKIE). '. <hr>';

        //Para remover os "cookies", basta trocar o sinal de mais (+), logo após "time()", por um sinal de menos.

        //Acessando / exibindo um determinado "cookie":

        //print $_COOKIE['usuário'];

        //AVISO: não use "cookies" para armazenar senhas de "logins".

    ?>

</body>

</html>
