<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"For" e "Foreach"</title>

</head>

<body>
    
    <?php

        //Aqui o "for" segue a mesma lógica do "for" no JS.

        for ($contador = 0; $contador < 10; $contador++):

            echo "Valor do contador: $contador <br>";

        endfor;

        echo '<hr>';

        for ($contador = 1; $contador < 11; $contador++):

            echo "Tabuada do 5: 5 x $contador = ". $contador * 5, '<br>';

            //A expressão matemática também poderia ter ido entre parênteses.

        endfor;

        echo '<hr>';

        //Já o "foreach" funciona como o "for" do Python: "for a in variável: print(a)".

        $cores = array('vermelho', 'azul', 'verde');

        foreach ($cores as $valor):

            echo "Cor: $valor <br>";

        endforeach;

        echo '<hr>';

        //Usando "foreach" acrescido de índices:

        foreach ($cores as $índice => $valor):

            echo "Cor: $índice - $valor <br>";

        endforeach;

        echo '<hr>';

    ?>

</body>

</html>
