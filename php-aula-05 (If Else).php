<?php

    //If & Else
    
    $nota = 50;

    if($nota >= 60){
        echo 'Aprovado';
    }
    else{
        echo 'Reprovado';
    }

    //Teste com condição lógica
    if(($nota >= 40)&($nota <= 60)){
        echo 'Aluno selecionado';
    }else{
        echo 'Aluno fora da faixa';
    }

?>