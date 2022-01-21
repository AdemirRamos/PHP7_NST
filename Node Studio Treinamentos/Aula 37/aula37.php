<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>

    <style>

        input {
            display: block;
            margin-bottom: 10px;
        }

    </style>

</head>

<body>
    
    <?php

        //Verificando se o usuário clicou no botão "Enviar".

        if (isset($_POST['form-submit'])):
            $formatos_permitidos = array('png', 'jpeg', 'jpg', 'gif');

            //var_dump($_FILES);

            //echo '<hr';

            //Selecionando a extensão de um arquivo para saber se ela é válida ou não:

            $extensão = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            echo "Resultado de 'extensão': $extensão.";

            echo '<hr>';

            //Verificando se a extensão do arquivo existe dentro do "array":

            if (in_array($extensão, $formatos_permitidos)):

                //Primeiro parâmetro: a extensão; segundo parâmetro: o "array" onde será feita a busca.

                //echo 'A extensão do arquivo integrado à página é permitida.<hr>';

                $pasta = 'C:\Users\Lucineide Ferreira\Desktop\Programming\PHP\PHP7_Repository_NST\Node Studio Treinamentos\Aula 37\Mídia';

                $temporário = $_FILES['arquivo']['tmp_name'];

                //Renomeando o arquivo:

                $novo_nome = uniqid().".$extensão";

                //"Uploading" o arquivo:

                if (move_uploaded_file($temporário, $pasta.$novo_nome)):
                    $mensagem = '"Upload" feito com sucesso!';
                
                else:
                    $mensagem = 'Erro no "upload".';

                endif;

            else:

                //echo 'A extensão do arquivo integrado à página não é permitida.<hr>';

                $mensagem = 'A extensão do arquivo integrado à página não é permitida.<hr>';

            endif;

            echo "$mensagem";

        endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

        <!--Checar "enctype".-->

        <input type="file" name="arquivo">
        <input type="submit" name="form-submit">

    </form>

</body>

</html>
