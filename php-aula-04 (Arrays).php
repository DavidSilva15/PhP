<?php

    //Arrays
    $vet = array(6);
    $i = 1;

    $vet[0] = 'Carro';
    $vet[1] = 'Avião';
    $vet[2] = 'Navio';
    $vet[3] = 'Moto';
    $vet[4] = 'Ônibus';
    $vet[5] = 20;

    echo $vet[0] . '<br>';

    echo ' <br>';
    echo 'Elemento de índice ' . $i . ' ' . $vet[$i]  . '<br>';

    $vet2 = array('nome'=>'David', 'cidade'=>'Camaçari', 'curso'=>'PHP');
    echo ' <br>';

    echo 'Nome: ' . $vet2['nome'] . 'Cidade: ' . $vet2['cidade'];
    echo ' <br>';

    //Array do tipo Matriz
    $mat = array(
        array('Onix', 65000),
        array('Celta', 35000),
        array('Gol', 50000),
    );

        echo 'Carro A: ' . $mat[0][0] . ' Valor: ' . $mat[0][1] . '<br>';
        echo 'Carro A: ' . $mat[1][0] . ' Valor: ' . $mat[1][1] . '<br>';
        echo 'Carro A: ' . $mat[2][0] . ' Valor: ' . $mat[2][1] . '<br>';
?>