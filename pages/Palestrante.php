<?php
require_once './../src/model/Palestrante.php';

$json = $_COOKIE['palestrante'];
$palestrante = json_decode($json, true);

$palestrante = new Palestrante($palestrante);

if(!$palestrante->isEmpty())
    header('Location: ./Perfil.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./../css/reset.css">
    <link rel="stylesheet" type="text/css" href="./../css/index.css">
    <link rel="stylesheet" type="text/css" href="./../css/Palestrante.css">
    <title>Área do palestrante &#x2015; IF Maker</title>
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
            <div class="palestrante">
                <h2>Área do palestrante</h2>
                
                <div class="bordinha" style="background-color: white">&nbsp;</div>

                <p>Depois de cadastrado, você poderá cadastrar eventos para as
                    comunidades interna e externa ao
                    <abbr title="Instituto Federal de Mato Grosso do Sul">IFMS</abbr>
                    câmpus Aquidauana.</p>
                <br>

                <span switch>Já sou palestrante! =')</span>

                <form class="n1" action="./_Palestrante.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" placeholder="Nome">
                    
                    <label for="email">Endereço de e-mail: </label>
                    <input type="email" name="email" placeholder="Endereço de e-mail">

                    <label for="cpf">Digite o n.º de CPF:</label>
                    <input type="text" name="cpf" placeholder="n.º de CPF">

                    <label for="rg">Digite o n.º de RG:</label>
                    <input type="text" name="rg" placeholder="n.º de RG">

                    <label for="orgao_emissor">Órgão Emissor do RG:</label>
                    <input type="text" name="orgao_emissor" placeholder="Órgão emissor do RG">

                    <label for="naturalidade">Naturalidade:</label>
                    <input type="text" name="naturalidade" placeholder="Naturalidade">

                    <label for="data_nascimento">Digite o dia, mês e ano da data em que nasceu:</label>
                    <input type="date" name="data_nascimento">

                    <input type="submit" value="Enviar">
                </form>

                <form class="n2" action="./__Palestrante.php" method="POST" style="display: none">
                    <label for="cpf">Digite o n.º de CPF:</label>
                    <input type="password" name="cpf" placeholder="n.º de CPF">

                    <label for="senha">Digite o n.º de CPF novamente:</label>
                    <input type="password" name="senha" placeholder="n.º de CPF">
                
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </section>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente sem Wix.com</footer>

    <script type="text/javascript">
        var span = document.querySelector('span[switch]'),
            div1 = document.querySelector('.n1'),
            div2 = document.querySelector('.n2');    

        span.onclick = function(event) {
            var textos = [
                'Já sou palestrante! =\')',
                'Quero me cadastrar como um palestrante... =\'('
            ];

            switch(event.target.innerText) {
                case textos[0]:
                    event.target.innerText = textos[1];
                    div1.style.display = 'none';
                    div2.style.display = 'block';
                    break;
                
                case textos[1]:
                    event.target.innerText = textos[0];
                    div1.style.display = 'block';
                    div2.style.display = 'none';
                    break;
            }
        }
    </script>
</body>
</html>