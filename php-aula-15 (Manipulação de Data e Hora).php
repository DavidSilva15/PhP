<?php

    //Manipulação de Data e Hora
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');

    $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho');

    echo 'Hoje é: ' . $dia . '/' . $meses[$mes-1] . '/' . $ano;

    echo '<br>' . '<hr>';

    $hora = date ('H');
    $minuto = date ('i');
    $segundo = date ('s');

    echo 'Horas: ' . $hora . ':' . $minuto . ':' . $segundo;
?>