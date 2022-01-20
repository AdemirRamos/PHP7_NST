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

            //Somando filtros às validações:

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

            //"FILTER_SANITIZE_NUMBER_INT": Não permite que um valor diferente de um número inteiro seja escrito como resultado.
            //Caso, na mensagem, entre outras coisas, exista um número, somente esse número será mostrado como resultado.

            if (!filter_var($idade, FILTER_VALIDATE_INT)):
                $erros[] = 'A idade deve ser um número inteiro.';

            endif;

            //O primeiro parâmetro de "filter_var()" é o nome da variável; o segundo o filtro que se deseja utilizar.

            print "Resultado: $idade. <hr>";

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

            //"FILTER_SANITIZE_EMAIL": Caso exista algum caractere que não componha o e-mail, esse será removido - restando só o e-mail.

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $erros[] = 'O e-mail digitado é inválido.';

                //A depender do que o usuário digite, o "filter_validate_email" pode não funcionar perfeitamente.
                //Um exemplo disso ocorre quando o usuário digita um e-mail com duas @'s.

            endif;

            print "Resultado: $email. <hr>";

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

            //"FILTER_SANITIZE_URL": Impede a impressão de caracteres que não componham a URL.

            if (!filter_var($url, FILTER_VALIDATE_URL)):
                $erros[] = 'A URL informada é/está inválida.';

            endif;

            print "Resultado: $url. <hr>";

            if (!empty($erros)):
                foreach ($erros as $erro);

                    echo "<li>$erro</li>";

                    echo '<hr>';

                T_ENDFOREACH;

            else:
                echo 'Nenhum erro foi encontrado.';
                echo '<hr>';

            endif;

        endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    Nome: <input type="text" name="nome" style="margin-bottom: 10px;">
    E-mail: <input type="text" name="email" style="margin-bottom: 10px;">
    Idade: <input type="text" name="idade" style="margin-bottom: 10px;">
    URL: <input type="text" name="url" style="margin-bottom: 10px;">

    <input type="submit" name="form_submit">

    </form>

</body>

</html>
