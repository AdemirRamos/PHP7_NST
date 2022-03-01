<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Para Números</title>

    <style>

        p {
            display: inline;
            color: green;
            font-weight: bolder;
        }

    </style>

</head>

<body>
    
    <?php

        //Funções para números:

        //1ª: "number_format": nos possibilita formatar número de maneira mais precisa.

        $db = 1234.56;

        $preço = number_format($db, 2, ',', '.');

        //O primeiro parâmetro é o número a ser modificado; o segundo o número de casas decimais; o terceiro é o separador decimal;
        //O quarto parâmetro é o separador de milhares.

        print "O valor do produto é: <p>R$$preço.</p>";

        print '<hr>';

        //2ª: "round": serve para arredondar números (de maneira padrão).

        print 'Arredondamento padrão: ';

        print round(4.5);

        print '<hr>';

        //3ª: "ceil": também arredonda um número, porém sempre para cima.

        print 'Arredondamento para cima: ';

        print ceil(3.3);

        print '<hr>';

        //4ª: "floor": também arredonda um número, porém sempre para baixo.
        
        print 'Arredondamento para baixo: ';

        print floor(5.9);

        print '<hr>';

        //5ª: "rand": serve para sortear números aleatoriamente.

        print 'Valor aleatório: ';

        print rand(1, 10);

        //O primeiro parâmetro é o valor mínimo a ser sorteado; o segundo é o valor máximo.

        print '<hr>';

    ?>

</body>

</html>
