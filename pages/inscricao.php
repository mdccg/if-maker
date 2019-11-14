<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
    <link rel="stylesheet" type="text/css" href="./../index.css">
    <link rel="stylesheet" type="text/css" href="./../css/inscricao.css">
    <title>Busca de inscrições &#x2015; IF Maker</title>
</head>

<body>
    <?php
    require_once './../src/connection/ConnectionFactory.php';

    require_once './../src/dao/EventoDao.php';
    require_once './../src/dao/InscricaoDao.php';
    require_once './../src/dao/PalestranteDao.php';

    require_once './../src/model/Evento.php';
    require_once './../src/model/Inscricao.php';
    require_once './../src/model/Palestrante.php';
    
    $inscricaoDao = new InscricaoDao;
    $palestranteDao = new PalestranteDao;

    $inscricao = new Inscricao(Array());

    $cpf = isset($_GET['cpf']) ? $_GET['cpf'] : NULL;

    if($cpf != NULL)
        $inscricao = $inscricaoDao->getInscricaoByCpf($cpf);
    ?>
    <header>
        <nav class="container">
            <ul>
                <li><a href="./../#">Home</a></li>
                <li><a href="./../#definicao">O que é?</a></li>
                <li><a href="./../#perfil">Quem somos</a></li>
                <li><a href="./../#equipamentos">Equipamentos</a></li>
                <li><a href="./../#inscricoes">Inscrições IF Maker</a></li>
                <li><a href="./evento.php">Eventos</a></li>
                <li><a href="./palestrante.php">Palestrante</a></li>
                <li><a href="#">Inscrições</a></li>
            </ul>
        </nav>
    </header>

    <div class="bkgd3">
        <div class="container">
            <h2>Buscar inscrições</h2>

            <div hr></div>

            <form action="#" method="GET" id="busca">
                <br />
                
                <h2>Pequise pelo n.º de CPF: (apenas números)</h2>

                <div hr></div>

                <input type="text" name="cpf" placeholder="n.º de CPF do(a) inscrito(a)">
            </form>

            <?php if(!$inscricao->isEmpty()) { ?>

            <form action="#alcoolico" method="POST">
                <label for="nome">Digite o nome completo: <span require title="Obrigatório">*</span></label>
                <input type="text" name="nome" placeholder="Nome completo" required value="<?= $inscricao->getNome() ?>">

                <label for="email">Endereço de e-mail: <span require title="Obrigatório">*</span></label>
                <input type="email" name="email" placeholder="Endereço de e-mail" required value="<?= $inscricao->getEmail() ?>">

                <label for="evento_id">Evento: <span require title="Obrigatório">*</span></label>
                <select name="evento_id" required>
                    <option value="">Selecione um evento</option>

                    <?php
                    $eventos = $inscricaoDao->getEventosByInscricao($inscricao->getId());
                    print_r($eventos);

                    foreach($eventos as $evento) {
                        $palestrante = $palestranteDao->getPalestranteById($evento->getPalestrante_id());
                    ?>

                    <option value="<?= $evento->getId() ?>"><?= $evento->getTitulo() . ' - ' . $palestrante->getNome() ?></option>
                    
                    <?php } ?>

                </select>

                <label for="cpf">Digite o n.º de CPF: (apenas números) <span require title="Obrigatório">*</span></label>
                <input type="text" name="cpf" placeholder="n.º de CPF" required pattern="[0-9]{11}" minlength="11" maxlength="11" value="<?= $inscricao->getCpf() ?>">

                <label for="rg">Digite o n.º de RG: (apenas números) <span require title="Obrigatório">*</span></label>
                <input type="text" name="rg" placeholder="n.º de RG" required pattern="[0-9]{7}" minlength="7" maxlength="7" value="<?= $inscricao->getRg() ?>">

                <label for="orgao_emissor">Órgão Emissor do RG: <span require title="Obrigatório">*</span></label>
                <input type="text" name="orgao_emissor" placeholder="Órgão emissor do RG" required value="<?= $inscricao->getOrgao_emissor() ?>">

                <label for="naturalidade">Naturalidade: <span require title="Obrigatório">*</span></label>
                <input type="text" name="naturalidade" placeholder="Naturalidade" required value="<?= $inscricao->getNaturalidade() ?>">

                <label for="data_nascimento">Digite o dia, mês e ano da data em que nasceu: <span require title="Obrigatório">*</span></label>
                <input type="date" name="data_nascimento" required value="<?= $inscricao->getData_nascimento() ?>">

                <input type="submit" value="Salvar">
            </form>

            <?php } ?>

            <br />
        </div>
    </div>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente <b>sem Wix.com</b></footer>
</body>

</html>