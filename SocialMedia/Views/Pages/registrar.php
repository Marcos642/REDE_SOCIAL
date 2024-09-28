<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lOGIN NA REDE SOCIAL</title>
    <link rel="stylesheet" href="<?= INCLUDE_PATH_STATIC ?>estilos/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sidebar">

    </div> <!--sidebar-->

    <div class="form-container-login">
        <div class="logo-chamada-login">
            <h2>CONECTA.UFPA</h2>
            <p>Connecte-se com seus amigos e expanda seu aprendizado com a CONECT.UFPA</p>
        </div> <!--logo-chamada-login-->

        <div class="form-login">
            <form method="post">
                <input placeholder="Matricula*" type="text" name="login">
                <input placeholder="Senha*" type="password" name="senha">
                <input type="submit" name="acao" value="logar">
            </form>
            <p><a href="<?= INCLUDE_PATH ?>registrar">Criar conta</a></p>
        </div> <!--form-login-->
    </div> <!--form-container-login-->
</body>

</html>