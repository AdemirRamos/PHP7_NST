<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Dinâmicas</title>

</head>

<body>
    
    <?php

        $bebida = 'refrigerante';

        $$bebida = 'Guaraná';

        //A variável "bebida" que tinha como valor "refrigerante", teve o seu valor definido como nome da 2ª variável;
        //Segunda variável essa que recebeu o valor "Guaraná".

        echo $refrigerante;

        $destino = 'cidade';

        $$destino = 'Ilhéus';

        echo '<br><br>Cidade: ';
        echo $cidade;

        //A "variável-variável" precisa receber o mesmo nome da primeira variável;
        //Ao escrevê-la na tela, o valor da primeira variável será o nome da variável dinâmica (dentro de "echo" ou "print"). 

    ?>

</body>

</html>
