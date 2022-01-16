<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento e Decremento</title>

    <style>

        p {
            display: inline;
            color: red;
            font-weight: bolder;
        }

    </style>

</head>

<body>
    
    <?php

        $valor = 20;

        //Pré-incremento em 1 (um):

        print "<p>Valor original: $valor.</p>";

        print '<hr>';

        print 'Resultado do pré-incremento em 1: ';

        print ++$valor;

        print '<hr>';

        //Pós-incremento em 1 (um):

        print 'Resultado do pós-incremento em 1: ';

        print $valor++;

        print " (Valor adicionado: $valor).";

        print '<hr>';

        $valor = 10;
        
        print "<p>Novo valor: $valor.</p>";

        print '<hr>';

        print 'Resultado do pré-decremento em 1: ';

        print --$valor;

        print '<hr>';

        print 'Resultado do pós-decremento em 1: ';

        print $valor--;

        print " (Valor subtraído: $valor).";

        print '<hr>';

    ?>

</body>

</html>
