<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>

</head>

<body>
    
    <?php

        $contador = 0;

        while ($contador < 10):

            print "Valor do contador: $contador <br>";
            ++$contador;

        endwhile;

        //Com o "while" também se pode usar um bloco de código ({}) ao invés de dois pontos. Já com o "do while" não se poder usar ":".
        //No caso de se usar dois pontos, será preciso usar, também, o "endwhile".

        print '<hr>';

        $contador = 0;

        do {

            print "Valor do contador: $contador <br>";
            ++$contador;

        } while ($contador <= 10);

        print '<hr>';

    ?>

</body>

</html>
