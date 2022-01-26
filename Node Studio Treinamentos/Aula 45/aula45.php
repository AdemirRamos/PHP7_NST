<?php

    //Incluindo outro arquivo PHP ao presente:

    include 'header.php';

?>
    
<?php
    
    /*"include(_once)" e "require(_once)" são funções quase idênticas e tem por objetivo inserir o conteúdo de um arquivo PHP em outro arquivo PHP em execução. A diferença entre as duas é: "require", caso detecte algum erro, retornará uma mensagem de erro e interromperá o "script"; já "include", retornará um aviso porém não interromperá o "script".
    Para ambos comandos ("include" e "require") o comando "once" tem a mesma funcionalidade: caso o arquivo que está se tentando adicionar já tenha sido adicionado ao documento em questão anteriormente, ele não será novamente adicionado dentro do mesmo documento.*/

    echo 'Olá, pessoal!';

?>


<?php

    include 'footer.php';

?>
