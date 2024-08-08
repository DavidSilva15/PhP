<?php

    //Funções
    function exibir(){
        echo 'Olá mundo' . '<br>' . '<hr>';
        echo 'Aula sobre funções' . '<br>' . '<hr>';
    }

    exibir();

    function soma($a, $b){
        $res = $a+$b;
        echo 'A soma de a + b é : ' . $res . '<br>' . '<hr>';
    }

    soma(5, 10);


    function soma2($a, $b){
        $res = $a + $b;
        return $res;
    }

    $so = soma2(10, 8);
    echo ' Resultado de soma2 é: ' . $so  . '<br>' . '<hr>';
    
    //Função que calcula a média dos números listados no array
    $valores = array('1', '2', '3', '4', '5', '6');
    function media($val){
        $tam = count($val);
        $soma = 0;
        for($i = 0; $i < $tam; $i++){
            $soma += $val[$i];
        }
        return $soma/$tam;
    }

    $med = media($valores);
    echo $med;

?>