<?php

    session_start();

    //Inicia a sessão e verifica se a variável de sessão $vlog é 'true'
    if($_SESSION['vlog'] == 'true'){
        
        $_SESSION['nvariavel'] = 'Nova variável de sessão';
        echo '<h3>PÁGINA 1</H3>';

        echo $_SESSION['vnome'] . '<br>';
        echo $_SESSION['vsobrenome'] . '<br>';
    }else{
        echo 'Acesso não permitido' . '<br>' . '<br>';
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

    <a href="php-aula-19 (Sessões).php">Voltar</a>
    <a href="pg2.php">Segunda página</a>

</body>
</html>