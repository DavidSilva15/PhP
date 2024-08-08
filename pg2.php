<?php

    session_start();
    echo '<h3>PÁGINA 2</H3>';

    echo $_SESSION['vnome'] . '<br>';
    echo $_SESSION['vsobrenome'] . '<br>';
    echo $_SESSION['nvariavel'] . '<br>';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

    <a href="php-aula-19 (Sessões).php">Voltar</a>

</body>
</html>