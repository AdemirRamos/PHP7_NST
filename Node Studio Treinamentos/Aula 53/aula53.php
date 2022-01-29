<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando Com Datas</title>

</head>

<body>
    
    <?php
    
        //Funções para trabalhar com datas:

        //1ª: "date()":

        //'d': retorna o dia (número);
        //'D': retorna o dia (abreviação);
        //'m': retorna o mês (número);
        //'M': retorna o mês (abreviação);
        //'y': retorna o ano (número - dois digitos);
        //'Y': retorna o ano (número - quatro digitos);
        //'l': retorna o dia da semana (por extenso);
        //'h': retorna a hora (número - 12 horas);
        //'H': retorna a hora (número - 24 horas);
        //'i': retorna os minutos;
        //'s': retorna os segundos;
        //'A': retorna "PM";
        //'a': retorna "AM";

        //echo date('d/m/y H'). '<hr>';

        //Definindo o fuso horário:

        date_default_timezone_set('America/Sao_Paulo');

        echo date('d/m/y H'). '<hr>';

        //Armazenando a data em um banco de dados:

        //Coluna do tipo "date":

        $date = date('Y-m-d');

        echo "Resultado: $date. <hr>";

        //Coluna do tipo "datetime":

        $datetime = date('Y-m-d H:i:s');

        echo "Resultado: $datetime. <hr>";

        //2ª: função "time": retorna a quantidade de segundos desde 1970 até o momento atual:

        echo 'Resultado de "time()": '. time(). '. <hr>';

        //Formatando "time()":

        $time = time();

        echo 'Resultado: '. date('d/m/Y/', $time);

        //Trabalhando com datas passadas ou futura (usando "MKTime"):

        $data_de_pagamentos = mktime(18, 49, 00, 01, 29, 2022)

        //Parâmetros de "mktime": primeiro: hora; segundo: minutos; terceiro: segundos; quarto: mês; quinto: dia; sexto: ano. 

        //Formatando a data em "mktime":

        echo "Resultado: ". date('d/m/y - h:i', $data_de_pagamentos);

        //Ao cadastrar uma data para um produto, ao ser retornada, provavelmente, ela virá com o seguinte formato:
        
        //Em caso de coluna "date":

        //$data = '2022-04-10';
        
        //Em caso de coluna "datetime":
        
        $data = '2022-04-10 18:55:00';

        //Convertendo a data no formato "string" para o formato "time:

        $data = strtotime($data);

        echo "Resultado: ". date('d/m/Y', $data). '.<hr>';

    ?>

</body>

</html>
