<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitização ("Sanitize Filters")</title>

    <style>

        input {
            display: block;
        }

    </style>

</head>

<body>
    
    <?php
    
        //Filtros de Sanitização ("Sanitize Filters") são usados para limpar as variáveis.

        if (isset($_POST['form_submit'])):

            $erros = array();

            //Primeiro, temos o tipo do "input", depois, temos o nome da variável, e, por fim, o filtro escolhido.
            //Esses são os parâmetros de "filter_input".

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

            //"FILTER_SANITIZE_SPECIAL_CHARS": permitir escapar todos os códigos HTML.

            print "Resultado: $Nome. <hr>";

        endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    Nome: <input type="text" name="nome" style="margin-bottom: 10px;">
    E-mail: <input type="text" name="email" style="margin-bottom: 10px;">
    Idade: <input type="text" name="idade" style="margin-bottom: 10px;">
    URL: <input type="text" name="url" style="margin-bottom: 10px;">

    <input type="submit" name="form_submit">

    </form>

</body>

</html>
