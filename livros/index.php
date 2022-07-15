<?php
    include 'config.php';

    $data = [];

    $fp = fopen(DATA_SOURCE, 'r');
    while ($row = fgets($fp)) {
        // $data[] = $row;
        $data[] = explode(',', $row);
    }

    // var_dump($data);
    // exit();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico do paciente</title>
    <link rel="stylesheet" type="text/css" href="interior.css" media="screen" />
</head>


<body>
    <h1>Histórico de <?= $_SESSION['name'] ?></h1>

    <form action="add-paciente.php" method="POST">
        <fieldset>
            <legend>Evolução</legend>
            <label for="msg">Data</label><br>
            <input type="text" name="datas" placeholder=""><br>
            <label for="msg">Evolução</label><br>
	        <textarea id="msg" name="evolucao" rows="4" cols="50"></textarea>
            <input type="submit" value="Adicionar">
            <br>
            <a href="/logout.php">Sair</a>
        </fieldset>
        
    </form>

    <br><br>

    <table>
        <?php foreach ($data as $i => $row): ?>
            <?php if (trim($row[2]) == $_SESSION['username']): ?>
                <tr>
                    <th>Dia</th>
                    <th class="quebradetexto">Evolução</th>
                    </td>
                    <tr>   
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td>
                    <a href="delete.php?linha=<?= $i ?>">remover</a>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    </table>

</body>
</html>