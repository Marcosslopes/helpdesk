<?php
    session_start();

    //trabalhando na tratativa do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('arquivo.txt','a');
    //modificando arquivo
    fwrite($arquivo, $texto);
    //fechando arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>