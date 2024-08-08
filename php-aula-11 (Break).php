<?php

    //Break
    $vet = array('mouse', 'teclado', 'monitor', 'memória', 'sair', 'impressora');
    $tam = count($vet);
    $i = 0;

    $i = 0;
    echo 'Break usado em um While' . '<br>';
    while($i < $tam){
        echo $vet[$i] . '<br>';
        $i++;
        if($vet[$i] == 'sair'){
            break;
        }
    }
    echo '<hr>' . '<br>';
    
    echo 'Break usado em um Do while' . '<br>';
    $i = 0;
    do{
        echo $vet[$i] . '<br>';
        $i++;
        if($vet[$i] == 'sair'){
            break;
        }
    }while($i < $tam);

    echo '<hr>' . '<br>';

    echo 'Break usado em um For' . '<br>';
    for($i = 0; $i < $tam; $i++){
        echo $vet[$i] . '<br>';
        if($vet[$i] == 'sair'){
            break;
        }
    }

    echo '<hr>' . '<br>';

    echo 'Break usado em um forEachr' . '<br>';
    foreach($vet as $item){
        echo $item . '<br>';
        if($item == 'sair'){
            break;
        }
    }

?>