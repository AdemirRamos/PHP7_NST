<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validações ("Validate Filters")</title>

    <style>

        input {
            display: block;
        }

        .texto_vermelho {
            color: red;
            font-weight: bolder;
            text-decoration: underline;
            display: inline;
        }

    </style>

</head>

<body>
    
    <?php

        //Nota: eu não sei o porquê, mas o meu código não está funcionando perfeitamente.

        if (isset($_POST['form_submit'])):
            //echo '<p class="texto_vermelho">Dados enviados com sucesso!</p><hr>';

            $erros = array();

            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = 'A idade deve ser um número inteiro.';

            endif;

            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = 'O e-mail digitado é inválido.';

            endif;

            if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = 'O peso digitado está em um formato inválido.';

            endif;

            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = 'O IP informado é inválido.';

            endif;

            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = 'A URL informada é/está inválida.';

            endif;

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

    Peso: <input type="text" name="peso" style="margin-bottom: 10px;">
    E-mail: <input type="text" name="email" style="margin-bottom: 10px;">
    Idade: <input type="text" name="idade" style="margin-bottom: 10px;">
    IP: <input type="text" name="ip" style="margin-bottom: 10px;">
    URL: <input type="text" name="url" style="margin-bottom: 10px;">

    <button type="submit" name="form_submit">Enviar</button>

    </form>

</body>

</html>
