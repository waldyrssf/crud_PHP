<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de acompanhamento</title>
    <link rel="stylesheet" type="text/css" href="exterior.css" media="screen" />
</head>


<body>
    <h1>PÁGINA DO PACIENTE</h1>
    <?php if (($_GET['err'] ?? $_GET['erro'] ?? -1) == '0'): ?>
        <p>Paciente sem cadastro. Por favor, cadastrá-lo!</p>
    <?php endif ?>

    <div>
    <fieldset>  
        <legend><h4> LOGIN </h4></legend>

    <form action="login.php" method="POST">
        <label>Usuário</label><br>
        <input type="text" name="user" ><br><br>
        <label>Senha</label><br>
        <input type="password" name="passwd" ><br><br>
        <input type="submit"  value="Logar">
    </form>

        <br>

        <p> Cadastre um paciente <br> <a href="partedocadastro.php">aqui</a> </p>

    </fieldset> 
    </div>


</body>
</html>