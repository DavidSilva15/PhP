<?php

    $num1 = 16;
    $num2 = 5;

    $resSoma = $num1 + $num2;
    $resSub = $num1 - $num2;
    $resMult = $num1 * $num2;
    $resDiv = $num1 / $num2;
    $restDiv = $num1 % $num2;

    //Incrementa em +1
    $num1++;
    
    //Incrementa o valor + ele mesmo + 2
    $num1 += 2;

    //Comparação de valor
    $num1 == $num2;

    //Diferente de
    $num1 != $num2;


    echo 'Soma de num1 e num2: ' . $resSoma . '<br>';
    echo 'Subtração de num1 e num2: ' . $resSub . '<br>';
    echo 'Multiplicação de num1 e num2: ' . $resMult . '<br>';
    echo 'Divisão de num1 e num2: ' . $resDiv . '<br>';
    echo 'Resto da divisão de num1 e num2: ' . $restDiv . '<br>';


?>