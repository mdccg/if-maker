<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./../css/reset.css">
    <link rel="stylesheet" type="text/css" href="./../css/index.css">
    <link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
    <title>Inscrito! &#x2015; IF Maker</title>
</head>
<body>
    <?php
    $isset = isset($_POST);
    if(!$isset)
        header('Location: .');
    
    include_once './../../src/connection/ConnectionFactory.php';
    include_once './../../src/dao/UsuarioDAO.php';
    include_once './../../src/model/Usuario.php';
    
    $usuarioDAO = new UsuarioDAO;
    
    $array = $usuarioDAO->readUsuarios();
    $id = sizeof($array) + 1;
    $_POST['id'] = $id;

    // TODO
    unset($_POST['curso']);
    unset($_POST['horario']);
    
    $usuario = new Usuario($_POST);
    $usuarioDAO->createUsuario($usuario);
    ?>

    <header>
        <nav class="container">
            <ul>
                <li><a href="./../#home">Home</a></li>
                <li><a href="./../#o-q-eh">O que é?</a></li>
                <li><a href="./../#quem-somos">Quem somos</a></li>
                <li><a href="./../#equip">Equipamentos</a></li>
                <li><a href="./../#inscricoes">Inscrições IF Maker</a></li>
            </ul>
        </nav>
    </header>

    <div class="bkgd1">
        <section class="container">
            <object data="./../img/ifmaker_logo.svg" id="ifmaker_logo"></object>

            <div class="inscricoes">
                <h3 style="font-size: 32px">Encontre a gente</h3>

                <div class="bordinha" style="background-color: var(--cinza)">&nbsp;</div>

                <ul class="container">
                    <?php foreach ($_POST as $chave => $valor) { ?>

                    <li>
                        <p><b><?= ucfirst($chave) ?></b>: <?= $valor ?></p>
                    </li>

                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente sem Wix.com</footer>
</body>
</html>