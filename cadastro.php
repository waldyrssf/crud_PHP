<?php
    session_start();

    $username = $_POST['user'];
    $passwd = $_POST['passwd'];
    $hashed_pw = md5($passwd);
    $nomecompleto = $_POST['nomecompleto'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $dataentrada = $_POST['dataentrada'];
    $valorquinzenal = $_POST['valorquinzenal'];
    

    $users = [];
    $fp = fopen('users.csv', 'a');
    $row = implode (',', [$username, $hashed_pw, $nomecompleto, $cpf, $telefone, $endereco, $email, $dataentrada, $valorquinzenal]);
    fwrite($fp, $row . PHP_EOL);

    header('location: index.php');
?>