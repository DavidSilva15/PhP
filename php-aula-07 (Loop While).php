<?php

    //Loop while
    $i = 0;
    $tam = 10;
    $vet = array($tam);

    //O loop abaixo inicializa $i em 0 e enquanto ele for menor que 10, incrementa $i + 1
    while($i < $tam){
        $i++;
        echo 'Valor da variável i: ' . $i . '<br>' . '<br>';
    }

    echo '<hr>' . '<br>';

    //O loop abaixo pega o array $tam e percorre exibindo todas as posições presentes
    $i = 0;
    while($i < $tam){
        $vet[$i] = $i;
        echo $vet[$i] . '<br>';
        $i++;
    }

    //Outro exemplo de uso do loop While
    echo '<hr>';

    //Array multidimensional notícias onde ficam armazenados outros arrays com titulos associativos para título e conteúdo
    $noticias = array(
        array('titulo'=> 'Titulo da noticia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo'=> 'Titulo da noticia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo'=> 'Titulo da noticia 3', 'conteudo' => 'Conteúdo notícia 3')
    );

    echo '<pre>';
    print_r($noticias);
    echo '</pre>';
    echo '<br/>' . '<br/>' . '<br/>';
    
    //Inicializa a variável i (que vai representar o índice)
    $i = 0;
    
    //Enquanto i for menor que a quantidade do índice do array notícias, imprime o título e a notícia e incrementa +1 a i
    while($i < count($noticias)){
        echo '<h3>' . $noticias[$i]['titulo'] . '</h3>';
        echo '<p>' . $noticias[$i]['conteudo'] . '</p>';
        echo '<hr>';
        $i++;
    }

?>