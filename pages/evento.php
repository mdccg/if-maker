<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
    <link rel="stylesheet" type="text/css" href="./../index.css">
    <link rel="stylesheet" type="text/css" href="./../css/evento.css">
    <title>Cadastro de eventos &#x2015; IF Maker</title>
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
            </ul>
        </nav>
    </header>

    <div class="bkgd3">
        <div class="container eventos">
            <form action="./../src/controller/EventoController.php" method="POST">
                <label for="palestrante_id">Palestrante:</label>
                <input type="text" value="Mário Sá" disabled>

                <label for="titulo">Título do evento:</label>
                <input type="text" name="titulo">

                <label for="data_evento">Data do evento:</label>
                <input type="datetime-local" name="data_evento">

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente <b>sem Wix.com</b></footer>
</body>

</html>