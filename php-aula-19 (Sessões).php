<?php

    //Sessões

    //Inicia a sessão onde serão declaradas as variáveis de sessão
    session_start();
    
    //Declaração de variável de sessão
    $_SESSION['vnome'] = 'David';
    $_SESSION['vsobrenome'] = 'Silva';
    
    //Variável que vai permitir o acesso a próxima página
    $_SESSION['vlog'] = 'false';
    
    //Verifica utilizando o isset se a variável que está declarada em outra sessão existe, caso sim, exibir na tela
    if(isset($_SESSION['nvariavel'])){
        echo $_SESSION['nvariavel'] . '<br>' . '<br>';    
    }else{
        echo 'Variavel não foi definida' . '<br>';
    }
    
    //Apaga a variável de sessão vsobrenome
    //unset($_SESSION['vsobrenome']);

    echo $_SESSION['vnome'] . '<br>' . '<br>';
    echo $_SESSION['vsobrenome'] . '<br>' . '<br>';

    //Finaliza uma sessão
    //session_destroy();
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

    <a href="pg1.php">Página 1</a>

</body>
</html>