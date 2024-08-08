<?php

    //Recebendo dados de form HTML

    //Variáveis que irão capturar as informações vindas do form HTML
    //OBS: O arquivo HTML deve está rodando dentro de htdocs no servidor APACHE
    $vnome = $_POST["f_nome"];
    $vsenha = $_POST["f_senha"];

    echo 'Nome: ' . $vnome . '<br>' . '<br>' . 'Senha: ' . $vsenha;

?>