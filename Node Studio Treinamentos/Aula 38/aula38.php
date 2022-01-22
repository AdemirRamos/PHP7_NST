<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads Múltiplos</title>

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

            print 'Resultado: ';

            var_dump($_FILES);

            print '<hr>';

            $formatos_permitidos = array('png', 'jpeg', 'jpg', 'gif');

            //var_dump($_FILES);

            //echo '<hr';

            //Selecionando a extensão de um arquivo para saber se ela é válida ou não:

            $quantidade_de_arquivos = count($_FILES['arquivo']['name']);

            //"count" conta a quantidades de itens presentes no elemento selecionado.

            $contador = 0;

            while ($contador < $quantidade_de_arquivos):

                //É preciso se adicionar uma variável de controle de índice à variável "extensão" para selecionar todos os itens do vetor.

                $extensão = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                echo "Resultado de 'extensão': $extensão.";

                echo '<hr>';

                //Verificando se a extensão do arquivo existe dentro do "array":

                if (in_array($extensão, $formatos_permitidos)):

                    //Primeiro parâmetro: a extensão; segundo parâmetro: o "array" onde será feita a busca.

                    //echo 'A extensão do arquivo integrado à página é permitida.<hr>';

                    $pasta = 'C:\Users\Lucineide Ferreira\Desktop\Programming\PHP\PHP7_Repository_NST\Node Studio Treinamentos\Aula 37\Mídia';

                    //O mesmo ocorre aqui, com a variável "temporário":

                    $temporário = $_FILES['arquivo']['tmp_name'][$contador];

                    //Renomeando o arquivo:

                    $novo_nome = uniqid().".$extensão";

                    //"Uploading" o arquivo:

                    if (move_uploaded_file($temporário, $pasta.$novo_nome)):
                        print "\"Upload\" feito com sucesso para: \"$pasta.$novo_nome\". <hr>";
                    
                    else:
                        print "Erro no \"upload\" do arquivo \"$temporário\". <hr>";

                    endif;

                else:

                    //echo 'A extensão do arquivo integrado à página não é permitida.<hr>';

                    print "A extensão do arquivo integrado à página ($extensão) não é permitida. <hr>";

                endif;

                //echo "$mensagem";

                $contador++;

            endwhile;

        endif;

        //LEMBRETE: Todo servidor tem um limite de dados que podem ser enviados através do "$_POST".

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

        <!--Checar "enctype".-->

        <!--Ativando a possibilidade de se adicionar múltiplos arquivos através do atributo ("boolean") "multiple":-->
        <!--Caso vários arquivos sejam enviados, eles serão armazenados em formato de vetor.-->
        <!--Por conta disso, o nome do "input" do botão de envio de arquivos deve receber chaves [].-->

        <input type="file" name="arquivo[]" multiple>
        <input type="submit" name="form-submit">

    </form>

</body>

</html>
