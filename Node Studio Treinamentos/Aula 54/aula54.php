<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arquivos</title>

</head>

<body>
    
    <?php

        $arquivo = 'arquivo.txt';

        //Abrindo o arquivo:

        $abrir_arquivo = fopen($arquivo, 'r'); //O segundo parâmetro segue os esquemas vistos em Python: "rt", "wt", "a", et cetera.

        //'a': escrita; 'r': leitura.

        //Parâmetros de "fopen()": 1ª: o nome do arquivo a ser aberto; 2ª: diz respeito ao modo como o arquivo será aberto.

        //Adicionando conteúdo ao arquivo:

        $conteúdo = 'Conteúdo de teste.\r\n'; //"\n": pula linha; "\r": pesquisar.

        //Inserindo o conteúdo ao arquivo:

        //fwrite($abrir_arquivo, $conteúdo);

        //Definindo o tamanho do arquivo:

        $tamanho_do_arquivo = filesize($arquivo);

        //Exibindo o arquivo txt:

        while(!feof($abrir_arquivo)): //Tradução: "enquanto (não for o fim do arquivo(arquivo.txt))".

            $linha = fgets($abrir_arquivo, $tamanho_do_arquivo); //Comando responsável por pegar o conteúdo de cada linha e exibi-lo.

            print $linha. '<br>';

            //P. S.: É preciso alterar o modo do arquivo para leitura ('r').

        endwhile;

        //Fechando o arquivo:

        fclose($abrir_arquivo);

        //P. S.: A cada vez que a página do documento for atualizada, no navegador, o conteúdo será repassado para o arquivo txt.

    ?>

</body>

</html>
