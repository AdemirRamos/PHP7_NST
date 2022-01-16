<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo de Variáveis</title>

</head>

<body>
    
    <?php
    
        //Escopo de variável: o contexto onde ela foi declarada / definida.

        $nome = 'Ademir';

        //Variáveis de escopo global:

        $a = 1;
        $b = 3;
        $c = 7;

        function exibir_nome() {
            //A variável abaixo não funcionará sem que antes seja declarada como uma variável de escopo global.
            //Isso se deve ao fato de que se está tentando acessá-la dentro de um escopo local.

            global $nome;

            print "$nome";
        }

        exibir_nome();

        print '<hr>';

        //Agora a variável foi definida em um escopo local. Novamente: para poder usá-la, é precido defini-la com um escopo global.

        function exibir_cidade() {

            global $cidade;

            $cidade = 'Rio de Janeiro';
        }

        exibir_cidade();
        print "$cidade";

        print '<hr>';

        //Usando o "array globals" (para identificar quais variáveis serão globais):

        function somar() {
            print $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
        }

        somar();
    ?>

</body>

</html>
