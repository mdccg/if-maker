<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./../css/reset.css">
    <link rel="stylesheet" type="text/css" href="./../css/index.css">
    <title>Perfil &#x2015; IF Maker</title>
</head>
<body>
    <!-- TODO sisteminha de cadastro de eventos =) -->

    <header>
        <nav>
            <ul>
                <li><a href="./../#">Home</a></li>
                <li><a href="./../#o-q-eh">O que é?</a></li>
                <li><a href="./../#quem-somos">Quem somos</a></li>
                <li><a href="./../#equip">Equipamentos</a></li>
                <li><a href="./../#inscricoes">Inscrições IF Maker</a></li>
            </ul>
        </nav>
    </header>

    <div class="bkgd1">
        <section>
            <pre>
                <?php print_r($_COOKIE) ?>
            </pre>

            <form action="./_Perfil.php" method="POST">
                <input type="submit" value="Deslogar">
            </form>
        </section>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente sem Wix.com</footer>
</body>
</html>