<?php
    session_start();
    //VARIÁVEIS PARA RECEBER OS DADOS E UTILIZANDO O # PARA SEPARAR OS TEXTOS DAS VARIÁVEIS
    //STR_REPLACE UTILIZADO PARA CASO SEJA ESCRITO O # EMA ALGUM CAMPO SERÁ SUBSTITUÍDO POR - 
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //ABRIR ARQUIVO DE TEXTO
    // 1º parâmetro -> nome do arquivo
    // 2º parâmetro -> a = apenas para escrita

    $arquivo = fopen('arquivo.hd', 'a');

    //ESCREVENDO NO ARQUIVO
    fwrite($arquivo, $texto);

    //FECHA O ARQUIVO
    fclose($arquivo);

    header("Location: abrir_chamado.php");
?>