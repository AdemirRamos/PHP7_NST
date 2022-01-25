<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senhas Seguras Com "Password Hash"</title>

</head>

<body>
    
    <?php
    
        $senha = '123456';

        //"password_hasg()" recebe dois parâmetros: o 1ª é a senha em si; o 2ª é o algoritmo que irá gerar essa senha.
        //P. S.: o valor padrão para o segundo parâmetro costuma ser "password_default".

        $options = [
            //No PHP7, somente "cost" está disponível e seu valor padrão é 10. Quanto maior for esse valor, mais seguro será o "hash".
            //Por outro lado, quanto maior o valor mais recursos do "hardware" serão consumidos para gerar o "hash" em questão.

            'cost' => 10

            //Caso não seja necessário um valor maior do que 10 para o "hash", não será necessário usar o "$options".
        ];

        $senha_segura = password_hash($senha, PASSWORD_DEFAULT, $options);

        //"password_hash" ainda pode receber um terceiro parâmetro que funcionará como um vetor de opções.

        //P. S.: Na documentação do PHP, há outras opções de algoritmos para geração de senhas - para além de "password_default".

        echo "Senha segura (com \"password_hash\"): $senha_segura. <hr>";

        //P. S.: A cada vez que a página for atualizada, a "hash" mudará.

        /*P. S.: Caso "password_default" seja usado para salvar uma senha em um banco de dados, recomanda-se um espaço de 255 caracteres pois a senha criptografada pode conter mais do que 60 caracteres - como é o caso da senha acima.*/

        //Autentificando a senha:

        $senha_db = '$2y$10$6IJJLSvA/99EA0bqYQXa4uJLvxg8lROgw8ZfTZnoRFOeshWqEwiV2';

        //"password_verify" recebe dois parâmetros: o primeiro é a senha, o segundo o "hash".

        if (password_verify($senha, $senha_db)):

            echo 'Senha válida. <hr>';

        else:

            echo 'Senha inválida. <hr>';

        endif;

    ?>

</body>

</html>
