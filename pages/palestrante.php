<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
    <link rel="stylesheet" type="text/css" href="./../index.css">
    <link rel="stylesheet" type="text/css" href="./../css/palestrante.css">
    <title>Página do palestrante &#x2015; IF Maker</title>
</head>

<body>
    <header>
        <nav class="container">
            <ul>
                <li><a href="./../#">Home</a></li>
                <li><a href="./../#definicao">O que é?</a></li>
                <li><a href="./../#perfil">Quem somos</a></li>
                <li><a href="./../#equipamentos">Equipamentos</a></li>
                <li><a href="./../#inscricoes">Inscrições IF Maker</a></li>
                <li><a href="./evento.php">Eventos</a></li>
                <li><a href="#">Palestrante</a></li>
            </ul>
        </nav>
    </header>

    <div class="bkgd3">
        <div class="container palestrante">
            <form action="./../src/controller/PalestranteController.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">

                <label for="email">E-mail:</label>
                <input type="email" name="email">

                <label for="cpf">n.º de CPF:</label>
                <input type="text" name="cpf">

                <label for="rg">n.º de RG:</label>
                <input type="text" name="rg">

                <label for="orgao_emissor">Órgão emissor:</label>
                <input type="text" name="orgao_emissor">

                <label for="naturalidade">Naturalidade:</label>
                <input type="text" name="naturalidade">

                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="data_nascimento">

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente <b>sem Wix.com</b></footer>
</body>

</html>