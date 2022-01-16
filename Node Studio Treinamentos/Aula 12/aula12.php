<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Array" (Parte 1)</title>

</head>

<body>
    
    <?php

        //É possível atribuir, aos elementos do "array", um índice:

        $carros = array (1 => 'BMW', 2 => 'Lexus', 3 => 'Camaro', 4 => 'Mustang');

        //A impressão de "arrays" funciona de maneira diferente:

        print_r($carros);

        print '<hr>';

        print $carros[1];

        //Inserindo novos itens em um "array":

        $carros[] = 'Audi'; //Dessa forma, o novo item vai automaticamente para a última posição do "array".

        print '<hr>';

        print_r($carros);

        //Também é possível definir em qual posição do "array" o item entrerá - os demais índices do "array" podem ser redefinidos.
        
        $carros[6] = 'Honda';

        print '<hr>';

        print_r($carros);

        //Outra forma de se criar "arrays":

        $motos = array();

        $motos[] = 'Yamaha';
        $motos[] = 'Honda';
        $motos[2] = 'Suzuki';
        
        print '<hr>';

        print_r($motos);

        //Outra forma de se criar "arrays":

        $clientes = ['Ademir', 'Rodrigo', 'Felipe', 'Bia'];

        print '<hr>';

        print_r($clientes);

    ?>

</body>

</html>
