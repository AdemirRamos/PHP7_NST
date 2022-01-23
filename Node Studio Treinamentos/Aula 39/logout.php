<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Logout"</title>

</head>

<body>
    
    <?php
    
        //Destruindo / limpando sessões:

        session_start();

        session_unset(); //O comando ao lado limpa a sessão.

        session_destroy(); //O comando ao lado destrói a sessão.

    ?>

</body>

</html>
