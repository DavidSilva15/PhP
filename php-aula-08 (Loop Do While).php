<?php

    //Loop Do While
    
    //O bloco de códigos vai ser executado ao menos uma vez antes de realizar o teste lógico
    $i = 0;
    $tam = 3;
    do{
        echo 'Variável i tem o valor: ' . $i . '<br>';
        echo 'Variável tam tem o valor: ' . $tam . '<br>';
        $i++;
    }while($i < $tam);

    echo '<hr>' . '<br>';

    //Loop While

    //O bloco de códigos não vai ser executado, sendo preterido o teste condicional
    $i = 0;
    $tam = 3;
    while($i < $tam){
        echo 'Variável i tem o valor: ' . $i . '<br>';
        echo 'Variável tam tem o valor: ' . $tam . '<br>';
        $i++;
    }

?>