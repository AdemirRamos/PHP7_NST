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

        //O padrão a ser definido deve ir entre duas barras: "//".

        //Operadores:

        //1ª: ^: indica o início da expressão:
        
        //Caso o "padrão" comece com "a", por exemplo, e a "string" também comece por "a", o retorno será: "true". 

        //2ª: $: indica o fim da expressão:

        //Caso o "padrão" e "string" sejam iguais, o retorno será "true".

        //3ª: []: valida letra ou números - a depender do que vai entres colchetes.

        //Opções de valores: [a-z]: letras minúsculas; [A-Z]: letras maiúsculas; [A-Za-z]: ambas; [A-Za-z0-9]: ambas letras e números.

        //P. S.: Caso a "padrão" tenha mais de uma letra, o retorno será false.

        //"i" minúsculo, após a segunda barra, anula o "case sensitive" que, por definição, é padrão.

        //"{}": dentro das chaves se pode colocar o número de caracteres permitidos. Exemplo: "/[a-z]{1-5}/".

        //"?": o retorno só será "true" em caso de uma ou nenhuma ocorrência (caractere).

        //"*": o retorno será "true" independente do número de ocorrências (caracteres).

        //"+": o retorno será "true" somente quando houver um ou mais retorno (s) [ocorrências].

        $string = 'abc123';

        $padrão = "/^[a-z0-9]+$/i";

        if (preg_match($padrão, $string)):

            echo '"String" válida. <hr>';

            echo "Resultado: \"$string\". <hr>";
            
        else:

            echo 'Inválido. <hr>';

        endif;

    ?>

    <?php

        //1ª exemplo real:

        $string = 'emailnotreal123@gmail.com';

        $padrão = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)+$/i";
        
        //Dentro dos colchetes, estão todos os caracteres aceitos.
        //Após o sinal de mais, temos declaramos uma @ para que essa seja aceita e validada.
        //Após o arroba, temos a validação do "gmail".
        //Após o segundo sinal de mais, adicionamos um ponto para validar o ponto entre "gmail" e "com".
        //P. S.: Antes de ponto, devemos adicionar uma barra invertida.
        //Após o ponto, entre parênteses, vão as terminações aceitas - separadas por barra.

        if (preg_match($padrão, $string)):

            echo 'E-mail válido. <hr>';

            echo "Resultado: \"$string\". <hr>";
            
        else:

            echo 'Inválido. <hr>';

        endif;

        //2ª exemplo real:

        $string = '13/09/2018';

        $padrão = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

        //Assim como o ponto, a barra também precisa de, antes de si, ter uma barra invertida.

        if (preg_match($padrão, $string)):

            echo 'Data válida. <hr>';

            echo "Resultado: \"$string\". <hr>";
            
        else:

            echo 'Inválido. <hr>';

        endif;

    ?>

</body>

</html>
