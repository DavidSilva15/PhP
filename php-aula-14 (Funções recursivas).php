<?php

    //Funções recursivas
    function soma($num){
        if($num != 0){
            echo 'Função soma com o valor ' . $num . '<br>';
            soma($num-1);
        }
    }
    soma(10);

?>