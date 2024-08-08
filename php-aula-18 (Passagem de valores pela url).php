<?php

    //Passagem de valores via URL
    $texto = 'aula01';
    
    echo '<a href=pg1.php?tx=' . $texto . ' target=_self>Abre pg1</a>';
    
?>

<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form action="php-aula-17 (Isset).php" method="post">

        <label for="nome">Usuário</label>
        <input name="nome" id="nome" type="text">
        <input type="submit" value="Enviar">

    </form>
</body>
</html>-->