<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Array" (Parte 3)</title>

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

        //Obtendo o tamanho de um "array":

        echo '<hr>';

        echo 'Tamanho do "array clientes": ';

        echo count($clientes);

        echo '<hr>';

        $total_carros = count($carros);

        echo "Total de carros: $total_carros.";

        //"Loop" para percorrer "arrays" ("foreach"):

        echo '<hr>';

        foreach ($carros as $posição) {
            echo "$posição ";
        }

        echo '<hr>';

        foreach ($motos as $posição) {
            echo "$posição ";
        }
        
        echo '<hr>';

        foreach ($clientes as $posição) {
            echo "$posição ";
        }

        //"Arrays" Associativos (equivalentes ao Dicionário do Python):

        $pessoas = array('nome' => 'Ademir', 'idade' => 25, 'sexo' => 'feminino');

        print '<hr>';

        print 'Nome: ';

        print $pessoas['nome'];

        print ' | Idade: ';

        print $pessoas['idade'];

        print ' | Sexo: ';

        print $pessoas['sexo'];

        $pessoas['altura'] = 1.75;

        print ' | Altura: ';

        print $pessoas['altura'];

        print '<hr>';

        print_r($pessoas);

        print '<hr>';

        //Imprimindo as chaves e seus valores:

        foreach ($pessoas as $índice => $valor) {
            print $índice.': '.$valor.' | ';
        }

        //"Arrays" Multidimensionais ("arrays" com dois ou mais índices/"arrays"):

        $times = array(
            'cariocas' => array('Vasco', 'Flamengo', 'Botafogo', 'Fluminense'),
            'paulistas' => array('São Paulo', 'Santos', 'Palmeiras', 'Corinthians'),
            'baianos' => array('Bahia', 'Vitória', 'Itabuna', 'Sport'),
            'tabela' => array ('campeão' => 'Vasco', 'vice' => 'Flamengo', 'lanterna' => 'Botafogo')
        );

        print '<hr>';

        print $times['cariocas'][0];

        print ' ';

        print $times['paulistas'][1];

        print ' ';

        print $times['baianos'][2];

        print '<hr>';

        print 'Campeão: ';

        print $times['tabela']['campeão'];

        print ' | Vice: ';

        print $times['tabela']['vice'];

        print ' | Lanterna: ';

        print $times['tabela']['lanterna'];

        print '<hr>';

        foreach ($times['cariocas'] as $índice => $valor) {
            print " | $índice".': '.$valor;
        }

    ?>

</body>

</html>
