<?php

    //Loop forEach
    $transp = array('Carro', 'Moto', 'Bicicleta', 'Ônibus', 'Avião', 'Navio');

    //Percorre o array acima e atribui todos os indices à variável veiculo, exibindo cada um dos elementos
    foreach($transp as $veiculo){
        echo $veiculo . '<br>';
        /*if($veiculo == 'Bicicleta'){
            break;
        }*/
    }

    echo '<br>' . '<hr>' . '<br>';

    //Verifica se o veículo bicicleta está listado no array, se tiver, informa atra´ves do echo
    foreach($transp as $veiculo){
        if($veiculo == 'Bicicleta'){
            echo 'Bicicleta está na lista <br>';
            break;
        }
        if($veiculo == 'Trem'){
            echo 'Trem está na lista <br>';
        }
    }

    echo '<br>'.'<br>';

    //Outras aplicações do forEach

    //Declaração do array de pessoas
    $pessoas = array('David', 'Anderson', 'Rodrigo');

    //O forEach está percorrendo o array acima e retornando o nome das pessoas junto ao seu índice
    foreach($pessoas as $i => $nomePessoa){
        echo $i . ' ' . $nomePessoa;
        echo '<hr>'.'<br>';
    };

?>