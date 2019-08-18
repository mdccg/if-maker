<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="application-name" content="IF Maker">
    <meta name="author" content="br.edu.ifms">
    <meta name="description" content="Página de cadastro do IF Maker">
    <meta name="generator" content="Visual Studio Code">
    <meta name="keywords" content="Laboratório, Prototipação, Arduíno">
    <link rel="stylesheet" type="text/css" href="./css/reset.css"> <!-- reset adaptado -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/formulario.css">
    <link rel="shortcut icon" href="./favicon.ico">
    <title>Página de cadastro &#x2015; IF Maker</title>
</head>

<body>
    <?php
    include "./../dao/EnderecoDAO.php";
    ?>
    <header>
        <h1>IF Maker &#9881;</h1>
        <h2>Laboratório de fabricação <abbr
                title="Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul">IFMS</abbr> Aquidauana
        </h2>
    </header>

    <main class="container">
        <h3>Cadastre-se. É de graça e não dói nada.<sub>(A menos que o seu teclado tenha espinhos. Ouch!)</sub></h3>

        <div class="conteudo caixinha">
            <p>É digno de nota que temos uma política de segurança muito rígida, para garantir que suas informações
                sejam mantidas no mais absoluto sigilo.</p>
        </div>

        <form action="./cadastrar.php" method="POST">
            <label for="nome">Nome: <span title="Obrigatório">*</span></label>
            <input type="text" name="nome" required>

            <label for="dataNascimento">Data de nascimento:</label>
            <input type="date" name="dataNascimento">

            <label for="cpf">CPF: <span title="Obrigatório">*</span></label>
            <input type="text" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" name="cpf" placeholder="012.456.789-01"
                maxlength="14">

            <label for="email">Endereço eletrônico: <span title="Obrigatório">*</span></label>
            <input type="email" name="email" required>

            <label for="celular">Telefone celular: <span title="Obrigatório">*</span></label>
            <input type="phone" pattern="\([0-9]{3}\) [0-9]{1} [0-9]{4}-[0-9]{4}" name="celular"
                placeholder="(067) 9 4002-8922" maxlength="17">
            
            <label for="endereco">Endereço:</label>
            <select name="endereco">
                <?php
                $enderecoDAO = new EnderecoDAO;
                $enderecos = $enderecoDAO->buscaEnderecos();

                foreach($enderecos as $indice => $endereco) {
                ?>
                
                <option value="<?= $endereco->getId() ?>">
                    <?= $endereco->getLogradouro() . ', '
                        . $endereco->getNumero() . ', '
                        . $endereco->getBairro() . ', ' 
                        . $endereco->getCidade() . '-' 
                        . $endereco->getEstado() ?></option>
                <?php } ?>            
            </select>
            
            <div class="checkboxes" onclick="adicionarEndereco()">
                <input type="checkbox" name="adicionar-endereco">
                <label for="adicionar-endereco" class="clicavel">Oh, céus! Meu endereço não está listado!</label>
            </div>
            
            <div role="adicionar-endereco">
                <label for="logradouro">Logradouro:</label>
                <input type="text" name="logradouro">

                <label for="numero">Número:</label>
                <input type="text" pattern="[0-9]{,}" name="numero">

                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento">

                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro">

                <label for="cep">CEP:</label>
                <input type="text" pattern="[0-9]{5}-[0-9]{3}" name="cep" placeholder="79200-000" maxlength="9">

                <label for="estado">Estado:</label>
                <select name="estado">
                    <option>Estado não especificado</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                </select>

                <label for="cidade">Cidade:</label>
                <select name="cidade">
                    <option>Cidade não especificada</option>
                    <option value="Ponta Porã">Ponta Porã</option>
                    <option value="Aquidauana">Aquidauana</option>
                    <option value="Miranda">Miranda</option>
                </select>
            </div>

            <label for="nacionalidade">Nacionalidade:</label>
            <input type="text" name="nacionalidade">

            <label for="naturalidade">Naturalidade:</label>
            <input type="text" name="naturalidade">

            <label for="historico">Histórico escolar:</label>
            <textarea rows="16" cols="32" name="historico"></textarea>

            <fieldset>
                <legend>Cursos/Palestras/Oficinas</legend>

                <label for="poc">Arduíno</label>
                <input type="radio" name="poc" value="Arduíno">

                <label for="poc">Locução</label>
                <input type="radio" name="poc" value="Locução">

                <label for="poc">Rádio</label>
                <input type="radio" name="poc" value="Rádio">
            </fieldset>

            <fieldset>
                <legend>Horários disponíveis</legend>

                <label for="hora">09h</label>
                <input type="radio" name="hora" value="09:00">

                <label for="hora">11h</label>
                <input type="radio" name="hora" value="11:00">

                <label for="hora">15h</label>
                <input type="radio" name="hora" value="15:00">

                <label for="hora">18h</label>
                <input type="radio" name="hora" value="18:00">
            </fieldset>

            <!-- TODO consertar tupla de eventos -->
            <fieldset>
                <legend>Eventos</legend>

                <label for="evento0" class="clicavel">SMA</label>
                <input type="checkbox" name="evento0" value="SMA">

                <label for="evento1" class="clicavel">DCN</label>
                <input type="checkbox" name="evento1" value="DCN">

                <label for="evento2" class="clicavel">SCN</label>
                <input type="checkbox" name="evento2" value="SCN">

                <label for="evento3" class="clicavel">FECIAQ</label>
                <input type="checkbox" name="evento3" value="FECIAQ">
            </fieldset>

            <label for="senha">Senha: <span title="Obrigatório">*</span></label>
            <input type="password" name="senha" required>

            <div class="checkboxes">
                <input type="checkbox" name="termos" required>
                <label for="termos" class="clicavel">Eu li e concordo com os</label> <a
                    href="./img/04_Tiny-Writing-Emotion.jpg" target="_blank">termos de uso</a>.
                <span title="Obrigatório">*</span>
            </div>

            <input type="submit" value="Enviar" name="enviar">

            <input type="reset" value="Reset" name="limpar">
        </form>
    </main>

    <footer>
        <aside>
            <ul class="links">
                <li><a href=".">Nossos serviços</a></li>
                <li><a href="#">Cadastro</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="http://ifms.edu.br/" target="_blank">Site do IFMS</a></li>
            </ul>
        </aside>

        <div role="footer">
            <span role="copyright">&copy; Hiroshi & Matheuszinho 2019</span>
        </div>
    </footer>

    <script language="javascript" src="./js/formulario.js"></script>
</body>

</html>