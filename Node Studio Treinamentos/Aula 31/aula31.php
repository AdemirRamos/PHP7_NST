<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Criar Funções</title>

</head>

<body>
    
    <?php

        function exibir_nome() {
            echo 'Ademir';
        }

        echo 'Resultado da função: ';

        exibir_nome();

        echo '<hr>';

        function exibir_nome_2($nome) {
            echo "O nome escrito foi: \"$nome\".";
        }

        echo 'Resultado da função: ';

        exibir_nome_2('Ademir');

        echo '<hr>';

        function média($nome, $n1, $n2, $n3, $n4) {
            $média = ($n1 + $n2 + $n3 + $n4) / 4;
            echo "O nome do aluno é \"$nome\". A média do (a) aluno (a) $nome é de: ". number_format($média, 1, ',', '.');
        }

        média('Ademir', 9, 8, 7, 9);

        echo '<hr>';

        function média_2($nome, $n1, $n2, $n3, $n4) {
            $média = ($n1 + $n2 + $n3 + $n4) / 4;

            if ($média > 5):
                echo "O (a) aluno (a) $nome, com a média de ". number_format($média, 1, ',', '.'), ", está aprovado.";

            elseif ($média == 5):
                echo "O (a) aluno (a) $nome, com a média de ". number_format($média, 1, ',', '.'), ", está em recuperação.";

            elseif ($média < 5):
                echo "O (a) aluno (a) $nome, com a média de ". number_format($média, 1, ',', '.'), ", está reprovado.";

            endif;
        }

        média_2('Ademir', 7, 8, 9, 9);

        echo '<hr>';

    ?>

</body>

</html>
