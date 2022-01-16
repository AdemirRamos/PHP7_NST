<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais ("If", "Else" e "Elseif")</title>

</head>

<body>
    
    <?php
    
        $número = 10;

        if ($número == 10):
            echo 'O valor da variável "número" é igual a 10.';
        
        elseif ($número <= 9):
            echo 'O valor da variável "número" é igual ou menor do que 9.';

        else:
            echo 'O valor da variável "número" não é igual a 10.';

        endif;

        echo '<hr>';

        //Condição ternária:

        $média = 7;

        echo ($média >= 7) ? 'Aluno (a) aprovado (a).' : 'Aluno (a) reprovado (a).';

        echo '<hr>';

    ?>

</body>

</html>
