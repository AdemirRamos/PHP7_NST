<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>

</head>

<body>
    
    <?php

        //Constante: uma variável com valor inalterável.

        //Delcarando constantes:

        define('nome', 'Ademir');

        //Primeiro, entre aspas, temos o nome da Constante; depois, o seu valor.

        echo nome;

        //Com Constantes, não é preciso usar o "$" (cifrão) para referenciá-las.

        define('idade', 25);
        define('sexo', 'feminino');
        define('casado', true);

        echo '<hr>';

        var_dump(nome);

        echo '<hr>';

        echo 'Meu nome é '.nome. ' e minha idade é '.idade. '. Meu sexo é '.sexo. ' e meu estado civil é '.casado. ' (casado).';

        //Também se pode criar Constante's em forma de "array":

        echo '<hr>';

        define('times', ['Vasco', 'São Paulo', 'Santos', 'Palmeiras']);

        echo times[0], '.';

        echo '<hr>';

        var_dump(times);

        echo '<hr>';

        //Outro detalhe que diferencia as Constante's das Variáveis: as Contante's são globais:

        function exibir_nome() {
            echo nome;
        }

        exibir_nome();
    ?>

</body>

</html>
