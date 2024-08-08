<?php

    //Isset: Verifica se algo existe no código
    $aula = '';

    //Verifica se a variável aula está definida
    if(isset($aula)){
        echo 'Variável definida';
    }else{
        echo 'Variável não encontrada';
    }

    //Verifica se o nome que veio do formulário foi submetido através do método $_POST[]
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        echo 'Nome: ' . $nome . '<br>';
    }
    else{
        echo 'Dados não submetidos' . '<br>';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form action="php-aula-17 (Isset).php" method="post">

        <label for="nome">Usuário</label>
        <input name="nome" id="nome" type="text">
        <input type="submit" value="Enviar">

    </form>
</body>
</html>

<?php

    //Inclui o formulário na checagem da condição e caso o resultado for TRUE, não exibe mais o formulário
    }

?>