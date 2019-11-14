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
                <li><a href="#">Eventos</a></li>
                <li><a href="./palestrante.php">Palestrante</a></li>
                <li><a href="./inscricao.php">Inscrições</a></li>
            </ul>
        </nav>
    </header>

    <div class="bkgd3">
        <div class="container eventos">
            <h2>Cadastro de eventos</h2>

            <div hr></div>

            <form action="./../src/controller/EventoController.php" method="POST">
                <label for="palestrante_id">Palestrante: <span require title="Obrigatório">*</span></label>
                <select name="palestrante_id" required>
                    <option value>Selecione o seu palestrante</option>
                    <?php
                    require_once './../src/connection/ConnectionFactory.php';
                    require_once './../src/dao/PalestranteDao.php';
                    require_once './../src/model/Palestrante.php';
                    require_once './../src/utils/PHPUtils.php';

                    $palestrantes = listaPalestrantes();
                    foreach($palestrantes as $palestrante) {
                    ?>

                    <option value="<?= $palestrante->getId() ?>"><?= $palestrante->getNome() ?></option>

                    <?php } ?>
                </select>

                <label for="titulo">Título do evento: <span require title="Obrigatório">*</span></label>
                <input type="text" name="titulo" required>

                <label for="data_evento">Data do evento: <span require title="Obrigatório">*</span></label>
                <input type="datetime-local" name="data_evento" required>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente <b>sem Wix.com</b></footer>
</body>

</html>