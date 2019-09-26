<?php
require_once './../src/connection/ConnectionFactory.php';
require_once './../src/dao/PalestranteDao.php';
require_once './../src/model/Palestrante.php';

$palestrante = $_COOKIE['palestrante'];
$palestrante = json_decode($palestrante, true);
$palestrante = new Palestrante($palestrante);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./../css/reset.css">
    <link rel="stylesheet" type="text/css" href="./../css/index.css">
    <link rel="stylesheet" type="text/css" href="./../css/Perfil.css">
    <title>Perfil &#x2015; IF Maker</title>
</head>
<body>
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
            <div id="perfil">
                <h2 id="titulo">Olá, <?= $palestrante->getNome() ?></h2>

                <div class="bordinha" style="background-color: var(--cinza)"></div>

                <div class="abnt">
                    <p>Prezado(a) palestrante,</p>

                    <p>Bem-vindo(a) ao IF Maker.</p>

                    <p>A partir de agora, você poderá consultar em tempo real quais eventos você cadastrou,
                        seus respectivos inscritos, bem como dia e horário marcados.</p>
                </div>

                <div class="btns">
                    <button class="btn" onclick="window.location.href = './Evento.php'">Gerenciar eventos</button>
                
                    <form id="logoff" action="./_Perfil.php" method="POST">
                        <input class="btn" type="submit" value="Deslogar">
                    </form>
                </div>
            </div>
        </section>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente sem Wix.com</footer>
</body>
</html>