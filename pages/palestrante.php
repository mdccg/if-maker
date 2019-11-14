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
                <li><a href="./inscricao.php"></a></li>
            </ul>
        </nav>
    </header>

    <div class="bkgd3">
        <div class="container palestrante">
            <h2>Página do palestrante</h2>

            <div hr></div>

            <form action="./../src/controller/PalestranteController.php" method="POST">
                <label for="nome">Nome: <span require title="Obrigatório">*</span></label>
                <input type="text" name="nome" required>

                <label for="email">E-mail: <span require title="Obrigatório">*</span></label>
                <input type="email" name="email" required>

                <label for="cpf">n.º de CPF: <span require title="Obrigatório">*</span></label>
                <input type="text" name="cpf" required>

                <label for="rg">n.º de RG: <span require title="Obrigatório">*</span></label>
                <input type="text" name="rg" required>

                <label for="orgao_emissor">Órgão emissor: <span require title="Obrigatório">*</span></label>
                <input type="text" name="orgao_emissor" required>

                <label for="naturalidade">Naturalidade: <span require title="Obrigatório">*</span></label>
                <input type="text" name="naturalidade" required>

                <label for="data_nascimento">Data de nascimento: <span require title="Obrigatório">*</span></label>
                <input type="date" name="data_nascimento" required>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente <b>sem Wix.com</b></footer>
</body>

</html>