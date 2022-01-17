<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>

</head>

<body>
    
    <?php

        //Superglobais são variáveis pré-definidas no PHP. Essas variáveis, independentemente do escopo, sempre estão acessíveis.

        //1ª: "$_globals": essa variável é usada para se acessar variáveis de qualquer ponto do "script" PHP.
        
        //Todas as variáveis associadas à Globals são postas em um "array" chamado "Globals".

        $x = 10;
        $y = 15;

        function soma() {
            print 'Resultado da soma das variáveis X e Y: ';
            print $GLOBALS['x'] + $GLOBALS['y'];
        }

        soma();

        print '<hr>';

        //2ª: "$_server": contem informações sobre cabeçalhos, caminhos e locais do "script".

        print 'Resultado: ';

        print $_SERVER['PHP_SELF']. '<br>'; //Será retornado o nome do arquivo do "script" em execução.

        print '<hr>';

        print 'Resultado: ';

        print $_SERVER['SERVER_NAME']. '<br>'; //Será retornado o nome do "host" do servidor do "script" em execução.

        print '<hr>';

        print 'Resultado: ';

        print $_SERVER['SCRIPT_FILENAME']. '<br>'; //Será retornado o caminho absoluto do "script" em execução.

        print '<hr>';

        print 'Resultado: ';

        print $_SERVER['DOCUMENT_ROOT']. '<br>'; //Será retornado o diretório raiz do "script" em execução.

        print '<hr>';

        print 'Resultado: ';

        print $_SERVER['SERVER_PORT']. '<br>'; //Será retornada a porta do "servidor-web".

        print '<hr>';

        print 'Resultado: ';

        print $_SERVER['REMOTE_ADDR']. '<br>'; //Será retornado o "endereço-IP" do local de onde o usuário visualiza a página.

        print '<hr>';

    ?>

</body>

</html>
