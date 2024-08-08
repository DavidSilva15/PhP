<?php

    //Loop For
    $i = 0;
    $tam = 5;

    for($i = 0; $i < $tam; $i++){
        echo 'Valor da variável i: ' . $i . '<br>' . '<br>';
    }

    echo '<hr>' . '<br>';
    
    //Escrevendo traços com o loop for
    for($i = 0; $i < 120; $i++){
        echo '-';
    }

    echo '<br>' . '<br>';

    //Comando For com Array
    for($i = 0; $i < $tam; $i++){
        $vet[$i] = $i*2;
    }

    //Indicando as posições dos objetos do array
    for($i = 0; $i < $tam; $i++){
        echo 'Valor da posição ' . $i . ': '  . $vet[$i] . '<br>';
    }

?>