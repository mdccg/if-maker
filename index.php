<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>IF Maker &#x2015; Home</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#o-q-eh">O que é?</a></li>
                <li><a href="#quem-somos">Quem somos</a></li>
                <li><a href="#equip">Equipamentos</a></li>
                <li><a href="#inscricoes">Inscrições IF Maker</a></li>
            </ul>
        </nav>
    </header>

    <?php require_once './components/Home.php' ?>
    <?php require_once './components/Equipamentos.php' ?>
    <?php require_once './components/OQueEh.php' ?>
    <?php require_once './components/QuemSomos.php' ?>

    <div class="bkgd3" style="background-attachment: fixed">
        <section style="min-height: 32vh"></section>
    </div>

    <?php require_once './components/Inscricoes.php' ?>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente sem Wix.com</footer>
</body>

</html>