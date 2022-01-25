<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia / Codificação</title>

</head>

<body>
    
    <?php
    
        /*Criptografia, a grosso modo, é o conjunto de regras que visa codificar uma informação para que apenas o receptor e o emissor possam decifrá-la.*/

        $senha = '123456';

        //Base64: É uma criptografia de mão dupla: possibilita a codificação e a descodificação.

        //Criando uma senha criptografada com "base64":

        $nova_senha = base64_encode($senha);

        print "Nova senha codificada: \"$nova_senha\". <hr>";

        //Descodificando a senha - anteriormente codificada:

        print "A sua senha (descodificada) é: ". base64_decode($nova_senha). '. <hr>';

        //Já MD5 e SHA1 são criptografia de mão única, ou seja, só podem ser criptografadas.

        //Exemplo com MD5:

        print "Criptografia com MD5: ". md5($senha). '. <hr>';

        //Exemplo com SHA1:

        print "Criptografia com SHA1: ". sha1($senha). '. <hr>';

        //Nota: existem maneiras de se descodificar as senhas criptografadas com MD5 ou SHA1.
        //Por conta disso, é preciso se dar uma camada a mais de segurança às senhas - e esse será o conteúdo da próxima aula.

    ?>

</body>

</html>
