<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>

</head>

<body>
    
    <?php
    
        //Operadores de Comparação:

        //1ª: == -> igual

        if (10 == 10):
            print '10 = 10? Verdadeiro.';
        
        endif;
        
        print '<hr>';

        //Assim como em JS, qualquer um dos números pode ir entre aspas sem que isso altere o resultado do teste lógico.

        if (10 == '10'):
            print '10 = "10"? Verdadeiro.';

        endif;

        print '<hr>';

        //2ª: != -> diferente ou não igual

        if (10 != 8):
            print '10 é diferente 8? Verdadeiro.';

        endif;

        print '<hr>';

        //3ª: === -> operador de identidade (ou igualdade irrestrita): verifica se dois valores são idênticos em grandeza e tipo.

        if (10 === '10'):
            print '10 é idêntico a \'10\'? Verdadeiro.';

        else:
            print "10 não é idêntico a '10'? Verdadeiro.";

        endif;

        print '<hr>';

        //4ª: === -> operador de não identidade: verifica se dois valores não são idênticos em grandeza e tipo.

        if (10 !== 10):
            print '10 não é idêntico a 10? Verdadeiro.';

        else:
            print "10 é idêntico a 10? Verdadeiro.";

        endif;

        print '<hr>';

        //5ª: <> -> diferente

        if (10 <> 10):
            print '10 é diferente de 10? Verdadeiro.';

        else:
            print "10 não é diferente de 10? Verdadeiro.";

        endif;

        print '<hr>';

        //6ª: < -> menor que

        if (10 < 10):
            print '10 é menor do que 10? Verdadeiro.';

        else:
            print "10 não é menor do que 10? Verdadeiro.";

        endif;

        print '<hr>';

        //7ª: > -> maior que

        if (10 > 10):
            print '10 é maior do que 10? Verdadeiro.';

        else:
            print "10 não é maior do que 10? Verdadeiro.";

        endif;

        print '<hr>';

        //8ª: >= -> maior ou igual

        if (10 >= 10):
            print '10 é maior ou igua a 10? Verdadeiro.';

        else:
            print "10 não é maior igual a 10? Verdadeiro.";

        endif;

        print '<hr>';

        //9ª: <= -> menor ou igual

        if (10 <= 10):
            print '10 é menor ou igua a 10? Verdadeiro.';

        else:
            print "10 não é menor igual a 10? Verdadeiro.";

        endif;

        print '<hr>';

        //10ª: <=> -> "spaceship": esse operador tem o formato de uma análise parcial.
        
        //Esse operador só pode retornar três valores:
        //1ª: se o lado esquerdo for menor, será retornado "-1";
        //2ª: se ambos os lados forem iguais, será retornado "0";
        //3ª: se o lado direito for menor, será retornado "1";

        print 'O resultado da expressão foi: ';

        var_dump(20 <=> 30)

    ?>

</body>

</html>
