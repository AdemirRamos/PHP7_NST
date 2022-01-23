<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body>
    
    <?php
    
        session_start();

        echo 'Cor: '. $_SESSION['cor']. '<hr>';
        echo 'Carro: '.$_SESSION['carro']. '<hr>';
        echo 'ID: '. session_id(). '<hr>';

    ?>

</body>

</html>
