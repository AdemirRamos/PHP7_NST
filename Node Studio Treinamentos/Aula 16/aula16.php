<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de "Arrays" (Parte 2)</title>

</head>

<body>
    
    <?php
        
        //Para mais Funções, explicações e exemplos, visite a página oficial do PHP e busque pela documentação.

        //1ª: "is_array()": verificar se o elemento inspecionado é um "array":

        $nomes = array('Ademir', 'Rodrigo', 'Bia', 'Felipe');

        $nomes_2 = array('pai' => 'Ademir', 'irmão' => 'Rodrigo', 'filha' => 'Bia', 'sobrinho' =>'Felipe');

        if (is_array($nomes) == 1):
            echo 'O elemento inspecionado é um "array".';
        
        endif;

        echo ' Resultado: ';

        echo is_array($nomes);

        echo '.';

        echo '<hr>';

        var_dump(is_array($nomes));
        
        echo '<hr>';

        if (is_array($nomes)):
            echo 'O elemento inspecionado é um "array".';

        else:
            echo 'O elemento inspecionado não é um "array".';

        endif;

        //2ª: "in_array()": verifica se um determinado valor existe em alguma posição do "array":
        
        //O primeiro valor é o elemento buscado; o segundo valor é o local onde será feita a busca.

        echo '<hr>';
        
        if (in_array('Ademir', $nomes)):
            echo 'O elemento inspecionado está no "array".';

        else:
            echo 'O elemento inspecionado não está no "array".';

        endif;

        echo ' Resultado da pesquisa: ';

        echo in_array('Ademir', $nomes);

        echo '<hr>';

        //Quando um teste lógico (no PHP) tiver como valor de retorno "false", não será exibida mensagem alguma na tela - salvo alteração.

        //3ª: "array_keys()": retorna um novo "array" com as Chave's do "array" passado como parâmetro:

        $keys = array_keys($nomes);

        echo 'Resultado: ';

        print_r($keys);

        echo '<hr>';

        $keys_2 = array_keys($nomes_2);

        echo 'Resultado: ';

        print_r($nomes_2);

        echo '<hr>';

        //4ª: "array_values()": retorna um novo "array" com os Valor'es do "array" passado como parâmetro:

        $values = array_values($nomes);

        print 'Resultado: ';

        print_r($values);

        print '<hr>';

        //5ª: "array_merge()": agrega o conteúdo de dois "arrays":

        $carros = array('Camaro', 'BMW', 'Lexus');
        $motos = array('Yamaha', 'Pop100', '50cc');

        $veículos = array_merge($carros, $motos);

        print 'Resultado: ';

        print_r($veículos);

        print '<hr>';

        //6ª: "array_pop()": exclui a última posição de um "array":

        //array_pop($veículos);

        //Ao se imprimir o "array_pop()", será mostrado o elemento excluído:
        
        print " | Elemento excluído: ";

        print array_pop($veículos);

        print ' | Resultado: ';

        print_r($veículos);

        print '<hr>';

        //7ª: "array_shift()": exclui a primeira posição de um "array":

        print " | Elemento excluído: ";

        print array_shift($veículos);

        print ' | Resultado: ';

        print_r($veículos);

        print '<hr>';

    ?>

</body>

</html>
