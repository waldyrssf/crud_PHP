<?php
    include 'config.php';

    $datas = $_POST['datas'];
    $evolucao = $_POST['evolucao'];


    $fp = fopen(DATA_SOURCE, 'a');
    // fwrite($fp, $nome . ',' . $sobrenome . ',' . $semestre . PHP_EOL);
    $row = implode(',', [$datas, $evolucao, $_SESSION['username']]);
    fwrite($fp, $row . PHP_EOL);

    header('location: index.php');
?>