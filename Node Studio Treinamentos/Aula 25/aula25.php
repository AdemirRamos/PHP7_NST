<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>

</head>

<body>
    
    <?php
    
        //1ª: && ou and -> e

        $idade = 25;
        $nome = 'Ademir';

        //Os testes lógicos podem ou não ir entre parênteses:

        if ($nome == 'Ademir' and $idade == 25):
            echo "Nome: $nome; Idade: $idade.";
        
        else:
            echo 'Condição não satisfeita.';

        endif;

        echo '<hr>';

        //2ª: || ou or -> ou

        if (($nome == 'Geovana') or ($idade == 25)):
            echo "Nome: $nome; Idade: $idade.";
        
        else:
            echo 'Condição não satisfeita.';

        endif;

        echo '<hr>';

        //3ª: xor -> ou exclusivo: seu resultado só será verdadeiro caso somente um dos testes lógicos seja verdadeiro.

        if ($nome == 'Ademir' xor $idade == 25):
            echo "Nome: $nome; Idade: $idade.";
        
        else:
            echo 'Condição não satisfeita.';

        endif;

        echo '<hr>';

        //4ª: ! -> negação: inverte o estado lógico da expressão: "!($nome == 'Ademir')" -> nome não é igual a "Ademir".1

        if (!($nome == 'Ademir') and !($idade == 25)):
            echo "Nome: $nome; Idade: $idade.";
        
        else:
            echo 'Condição não satisfeita.';

        endif;

        echo '<hr>';

    ?>

</body>

</html>
