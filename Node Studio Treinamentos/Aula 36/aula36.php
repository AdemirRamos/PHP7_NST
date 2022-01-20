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

            //"FILTER_SANITIZE_SPECIAL_CHARS": Impede que comandos HTML, passados via formulário, sejam executados como HTML.

            print "Resultado: $nome. <hr>";

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

            //"FILTER_SANITIZE_NUMBER_INT": Não permite que um valor diferente de um número inteiro seja escrito como resultado.
            //Caso, na mensagem, entre outras coisas, exista um número, somente esse número será mostrado como resultado.

            print "Resultado: $idade. <hr>";

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

            //"FILTER_SANITIZE_EMAIL": Caso exista algum caractere que não componha o e-mail, esse será removido - restando só o e-mail.

            print "Resultado: $email. <hr>";

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

            //"FILTER_SANITIZE_URL": Impede a impressão de caracteres que não componham a URL.

            print "Resultado: $url. <hr>";

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
