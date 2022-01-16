<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>

    <style>

        p {
            color: red;
            text-decoration: underline;
            display: inline;
            font-weight: bolder;
        }

    </style>

</head>

<body>
    
    <?php

        //Operadores aritméticos:

        //1ª: adição -> +

        echo 'Resultado de 10 + 10: ';

        echo 10 + 10;

        echo '<hr>';

        //2ª: subtração -> -

        echo 'Resultado de 10 - 5: ';

        echo 10 - 5;

        echo '<hr>';

        //3ª: multiplicação -> *

        echo 'Resultado de 10 x 5: ';

        echo 10 * 5;

        echo '<hr>';

        //4ª: divisão -> /

        echo 'Resultado de 10 / 2: ';

        echo 10 / 2;

        echo '<hr>';

        //5ª: módulo -> % | O módulo nos retorna o resto da divisão.
        
        echo 'Resto de 10 / 5: ';

        echo 15 % 5;

        echo ' | Resto de 15 / 4: ';

        echo 15 % 4;

        echo '<hr>';

        //6ª: exponencição -> ** | Significa um número elevado a outro.

        echo 'Resultado de 3²: ';

        echo 3 ** 2;

        echo '<hr>';

        $a = 10;
        $b = 20;
        $c = 30;
        $d = 5;
        $e = 16;

        echo "Valores da variáveis: <p>A: $a; B: $b; C: $c; D: $d; E: $e.</p>";

        echo '<hr>';

        $adição = $a + $b;

        echo 'Adição de A + B: ';

        echo $adição;

        echo '<hr>';

        $subtração = $c - $a;

        echo 'Subtração de C - A: ';

        echo $subtração;

        echo '<hr>';

        $multiplicação = $d * $a;

        echo 'Multiplicação de D x A: ';

        echo $multiplicação;

        echo '<hr>';

        $divisão = $c / $a;

        echo 'Divisão de C / A: ';

        echo $divisão;

        echo '<hr>';

        $módulo = $e % $d;

        echo 'Resto de E / D: ';

        echo $módulo;

        echo '<hr>';

        $exponenciação = $a ** $d;

        echo 'Resultado de A elevado a 5ª potência: ';

        echo $exponenciação;

        echo '<hr>';

        $média = (5 + 7 + 9 + 8) / 4;

        echo "Média dos valores apresentados: $média.";

        echo '<hr>';

    ?>

</body>

</html>
