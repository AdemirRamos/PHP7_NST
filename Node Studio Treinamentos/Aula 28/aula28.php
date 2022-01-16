<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Para "Strings" (Parte 1)</title>

</head>

<body>
    
    <?php

        //1ª: strtoupper: converte a "string" (por completo) em maiúscula.

        $nome = 'ademir';

        $novo_nome = strtoupper($nome);

        print "Resultado: $novo_nome.";

        print '<hr>';

        //2ª: strtolower: converte a "string" (por completo) em minúscula.

        $minúsculas = strtolower($nome);

        print "Resultado: $nome";

        print '<hr>';

        //3ª: substr: retorna uma determinada parte da "string".

        $mensagem = 'Olá, mundo!';

        print 'Resultado: ';

        print substr($mensagem, 5, 6);

        //O primeiro parêmtro de "substr" será a "string"; o segundo parâmetro será o ponto da "string" de onde deve começar a seleção.
        //Se pode adicionar um terceiro parâmetro para a função indicando onde a seleção deve acabar.

        print '<hr>';

        //4ª: str_pad: completa uma "string" com uma quantidade determinada de caracteres.

        $objeto = 'mouse';

        print 'Resultado: ';

        $novo_objeto = str_pad($objeto, 7, '*', STR_PAD_BOTH);

        //Serão adicionados mais dois caracteres para que a "string" tenha um comprimento de 7.
        //Como terceiro parâmetro da função, podemos adicionar o caractere que será adicionado.
        //Como quarto parâmetro, podemos adicionar o local onde serão inseridos os novos caracteres.
        //Valores de "str_pad": "left": caracteres à esquerda; "right": caracteres à direita;
        //"both": caracteres distribuídos em ambas as direções.

        print $novo_objeto;

        print '<hr>';

        //O primeiro parâmetro é a "string" a ser manipulada; o segundo caractere diz respeito ao tamanho da extensão a ser adicionada.

    ?>

</body>

</html>
