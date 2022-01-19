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

        //Verificando (abaixo) se o botão enviar foi pressionado pelo usuário:

        if (isset($_POST['form_submit'])):
            echo '<p class="texto_vermelho">Dados enviados com sucesso!</p><hr>';
            
            echo 'Conteúdo de "$_POST": ';

            var_dump($_POST);

            echo '<hr>';

            //Mesmo que alguns ou nenhum campo seja preenchido, a variável "$_POST" cria um "array" para todos os campos.
            //P. S.: Os campos não preenchidos, no "array", aparecerão sem nenhum conteúdo, somente com o índice.

            $idade = $_POST['idade'];

            echo "Idade: '$idade'.";

            echo '<hr>';

            //Da maneira como está acima, a idade digitada pelo usuário no campo "Idade" será escrita logo após a descrição do "array".

            //Entendendo a validação de dados: a validação serve para impedir ataques de usuários mal-intencianados

            $erros = array();

            //Usando "filter_input": 1ª parâmetro: o tipo de "input"; 2ª parâmetro: nome do campo; 3ª: o filtro a ser utilizado: 

            /*if ($idade == filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                echo 'A idade digitada é válida.';
                echo '<hr>';

            else:
                echo 'A idade digitada não é válida.';
                echo '<hr>';

            endif;*/

            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = 'A idade deve ser um número (inteiro).';

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
                $erros[] = 'A URL informado é/está inválida.';

            endif;

            //Criando uma condição para a exibição de erros:

            if (!empty($erros)): //Tradução: se a variável "$erros" estiver diferente de vazia.
                foreach ($erros as $erro);

                    echo "<li>$erros</li>";

                    echo '<hr>';
                
                T_ENDFOREACH;

            else:
                echo 'Nenhum erro foi encontrado.';
                echo '<hr>';

            endif;

        endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    <!--Usando a mesma página do formulário para abrigar o arquivo PHP para onde irão os dados - seguir o exemplo acima ("action").-->

    Peso: <input type="text" name="peso" style="margin-bottom: 10px;">
    E-mail: <input type="text" name="email" style="margin-bottom: 10px;">
    Idade: <input type="text" name="idade" style="margin-bottom: 10px;">
    IP: <input type="text" name="ip" style="margin-bottom: 10px;">
    URL: <input type="text" name="url" style="margin-bottom: 10px;">

    <!--Para verificar se o formulário foi preenchido e o usuário clicou em "Enviar", primeiro precisamos dar nome ao botão "Enviar":-->

    <input type="submit" name="form_submit">

    </form>

</body>

</html>
