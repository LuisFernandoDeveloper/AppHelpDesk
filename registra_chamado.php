<?php
    //estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);


    $texto = $titulo . '#' .  $categoria . '#' . $descricao . PHP_EOL;//PHP_EOL constante armazena uma quabra de linha

    //abrindo arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    
    //escrevendo o texto
    fwrite($arquivo, $texto);//primeiro parametro arquivo, segundo parametro dados a serem preenchidos no arquivo

    //fechando arquivo
    fclose($arquivo);

    echo $texto;

    header('Location: abrir_chamado.php');

    /* $desafioImplode = implode(',', $_POST);

    echo str_replace('#', '-', $desafioImplode); */
?>