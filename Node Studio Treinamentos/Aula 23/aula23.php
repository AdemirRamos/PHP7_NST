<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>

    <style>

        p {
            color: red;
            display: inline;
            font-weight: bolder;
        }

    </style>

</head>

<body>
    
    <?php
    
        $a = 10;

        echo "<p>Valor de A: $a.</p>";

        echo '<hr>';

        $b = $a + 5;

        echo "<p>Valor de B (A + 5): $b.</p>";

        echo '<hr>';

        //Outra grafia possível:

        $a += 5;

        echo "<p>Novo valor de A: $a.</p>";

        echo '<hr>';

        $c = 15;

        echo 'A - 15 = '. $a -= $c;
        
        echo '<hr>';

        $a = 5;

        echo "<p>Novo valor de A: $a.</p>";

        echo '<hr>';

        echo 'A x 15 = '. $a *= $c;

        echo '<hr>';

        $a = 10;
        $c = 2;

        echo "<p>Novo valor de A: $a; novo valor de C: $c</p>";

        echo '<hr>';

        echo 'A / C = '. $a /= $c;

        echo '<hr>';

        $a = 20;
        $c = 4;

        echo "<p>Novo valor de A: $a; novo valor de C: $c</p>";

        echo '<hr>';

        echo 'Resto da divisão de A por C: '. $a %= $c;

        echo '<hr>';
    
    ?>

</body>

</html>
