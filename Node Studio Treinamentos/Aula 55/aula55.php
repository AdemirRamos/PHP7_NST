<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Regulares e "Preg_Match" (Final)</title>

</head>

<body>
    
    <?php

        //Expressões Regulares: definem o padrão para ser usado para procurar e/ou substituir palavras.

        $string = 'abc';

        //O padrão a ser definido deve ir entre duas barras: "//".

        //Operadores:

        //1ª: ^: indica o início da expressão:
        
        //Caso o "padrão" comece com "a", por exemplo, e a "string" também comece por "a", o retorno será: "true". 

        //2ª: $: indica o fim da expressão:

        //Caso o "padrão" e "string" sejam iguais, o retorno será "true".

        //3ª: []: valida letra ou números - a depender do que vai entres colchetes.

        //Opções de valores: [a-z]: letras minúsculas; [A-Z]: letras maiúsculas; [A-Za-z]: ambas; [A-Za-z0-9]: ambas letras e números.

        //P. S.: Caso a "padrão" tenha mais de uma letra, o retorno será false.

        //P. S.: "i" minúsculo, após a barra, anula o "case sensitive".

        $padrão = '/[a-z]/';

        if (preg_match($padrão, $string)):

            echo 'Válido. <hr>';

            echo "Resultado: \"$string\". <hr>";
            
        else:

            echo 'Inválido. <hr>';

        endif;

    ?>

</body>

</html>
