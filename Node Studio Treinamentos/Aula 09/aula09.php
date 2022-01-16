<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspas Simples, Aspas Duplas e Concatenação</title>

    <style>

        strong {
            color: red;
            text-decoration: underline;
        }

    </style>

</head>

<body>
    
    <?php

        $nome = 'Ademir';

        echo $nome;

        echo '<hr>';

        echo 'Meu nome é: ', $nome;

        #Também é possível fazer comentários assim (com "#" - além de "//" e "/**/").

        #As aspas simples são literais, ou seja, mesmo que uma variável vá entre elas, ela será interpretada como caracteres (texto).

        //Com aspas duplas, isso não ocorrerá (pois elas são interpretativas - interpretam variáveis):

        echo '<hr>';

        $idade = 25;

        $sexo = 'feminino';

        echo "Meu nome é $nome, meu sexo é $sexo e a minha idade é $idade.";

        //Concatenação (com ponto):

        echo '<hr>';

        echo 'Meu nome é '.$nome, '. - <strong>Concatenação com ponto.</strong>';

        //Além da vírgula (como no exemplo acima), também poderíamos usar outro ponto:

        echo '<hr>';

        echo 'Meu nome é '.$nome. ' e minha idade é '.$idade. '.';

        //Caso se precise usar aspas simples ou duplas dentro de uma "string", basta, antes das aspas, adicionar barras invertidas (\):

        echo '<hr>';

        echo 'Meu nome é \'Ademir\' e o meu sobrenome é "Ramos" - <strong>Usando aspas simples e duplas dentro de uma "string".</strong>';

        //Caso se necessite usar aspas duplas dentro de uma "string" (declarada com aspas duplas), basta usar as barras invertidas.

    ?>

</body>

</html>
