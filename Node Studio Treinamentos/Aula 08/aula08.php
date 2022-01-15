<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Dados</title>

</head>

<body>
    
    <?php

        //Tipos de dados:

        //Escalares:

        //1ª "String":
        
        // - Cadeia de caracteres. Exemplo:

        $nome = 'Ademir';

        //Obtendo informações sobre uma variável:

        var_dump($nome);
        
        //Validação de variáveis:

        if (is_string($nome)):
            print ' | A variável analisada armazena uma "string".';

        else:
            print ' | A variável analisada não armazena uma "string".';

        endif;

        //Aparentemente, o "endif" marca o fim da Condição - e é obrigatório.

        print '<hr>';

        //2ª "Int":

        // - Números inteiros. Exemplo:

        $idade = 27;

        var_dump($idade);

        if (is_int($idade)):
            print ' | A variável analisada é um número inteiro (tipo: "int").';

        else:
            print ' | A variável analisada não é um número inteiro (tipo: "int").';

        endif;

        print '<hr>';

        //3ª "Float":

        // - Números reais (flutuantes). Exemplo:

        $altura = 1.73;

        var_dump($altura);
    
        if (is_float($altura)):
            print '| A variável analisada é um número real (tipo: "float").';

        else:
            print '| A variável analisada não é um número real (tipo: "float").';

        endif;

        print '<hr>';

        //4ª "Boolean":

        // - Representa os estados "true" e "false". Exemplo:

        $luz = false;

        var_dump($luz);

        if (is_bool($altura)):
            print '| A variável analisada é "boolean" (tipo: "true").';

        else:
            print '| A variável analisada é "boolean" (tipo: "false").';

        endif;

        print '<hr>';

        //Tipos de dados:

        //Compostos:

        //1ª "Array":

        // - Armazena vários valores. Exemplo:

        $carros = array ('Gol', 'Uno', 'Camaro', 12, 20.6, true);

        var_dump($carros);

        if (is_array($altura)):
            print '| A variável analisada é um "array".';

        else:
            print '| A variável analisada não é um "array".';

        endif;

        print '<hr>';

        //2ª "Object":

        // - Permite a criação de Objeto's. Exemplos:

        class Cliente {
            public $nome;
            public function atribuir_nome($nome) {
                $this -> $nome = $nome;
            }
        }

        $cliente = new Cliente();

        $cliente -> atribuir_nome('Ademir');

        var_dump($cliente);

        if (is_object($cliente)):
            print '| A variável analisada é um objeto.';

        else:
            print '| A variável analisada não é um objeto.';

        endif;

        print '<hr>';

        //Tipos de dados:

        //Especiais:

        //1ª: "Null":
        
        // - Variável com valor nulo. Exemplo:

        $cidade = null;

        var_dump($cidade);

        print '<hr>';

        //"Resource":

        // - É um tipo de dado que serve para fazer referência a arquivos externos.
        //P. S.: Arquivos externos: nos permitem fazer conexão com banco de dados, manipulação de arquivos, et cetera.
        
    ?>

</body>

</html>
