<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>

</head>

<body>
    
    <?php
    
        //As sessões servem para salvar informações que poderão ser usadas em várias páginas diferentes.

        //Toda Sessão deve ser iniciada com o comando "session_start()":

        session_start();

        //Criando uma Sessão:

        $_SESSION['cor'] = 'Verde';
        $_SESSION['carro'] = 'Veloster';

        //Descrição: Superglobal "session"; um nome para a sessão; um valor para a sessão.

        echo 'Cor: '. $_SESSION['cor']. '<hr>';
        echo 'Carro: '.$_SESSION['carro']. '<hr>';

        echo 'ID: '. session_id(). '<hr>';

        //Quando o navegador é fechado, todas as sessões são encerradas.

    ?>

</body>

</html>
