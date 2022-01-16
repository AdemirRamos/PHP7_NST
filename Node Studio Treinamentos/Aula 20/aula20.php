<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais ("Switch" / "Case")</title>

</head>

<body>
    
    <?php
    
        $cor = 'vermelho';

        print 'Cores: vermelho, verde e azul.';

        print '<hr>';

        switch($cor):

            case 'vermelho':
                print 'A cor da variável "cor" é: "vermelha".';
                break;
            
            case 'verde':
                print 'A cor da variável "cor" é: "verde".';
                break;

            case 'azul':
                print 'A cor da variável "cor" é: "azul".';
                break;

            default:
                print 'A cor da variável "cor" não é nenhuma das opções anteriores.';
                break;

            //Aparentemente, assim como no JS, o uso de "break", com "default", é facultativo.

        endswitch;

    ?>

</body>

</html>
