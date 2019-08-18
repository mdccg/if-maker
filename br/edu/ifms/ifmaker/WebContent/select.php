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
    <link rel="stylesheet" type="text/css" href="./css/select.css">
    <link rel="shortcut icon" href="./favicon.ico">
    <title>Banco de dados &#x2015; IF Maker</title>
</head>

<body>
    <?php
    include_once "./../dao/EnderecoDAO.php";
    include_once "./../dao/UsuarioDAO.php";


    function corrige($atributo) {
        switch ($atributo) {
            case 'data_nascimento':
                return 'Nascimento';

            case 'cpf':
                return 'CPF';

            case 'endereco':
                return 'Endereço';

            case 'numero':
                return 'Número';

            case 'cep':
                return 'CEP';

            case 'historico':
                return 'Histórico';

            case 'poc':
                return 'Cursos/Palestras/Oficinas';

            default:
                return ucfirst($atributo);
        }
    }

    function ignora($atributo) {
        $array = [ 'nacionalidade', 'naturalidade', 'historico', 'senha', 'eventos',
            'endereco_id', 'celular'];
        return in_array($atributo, $array);
    }

    $usuarioDAO = new UsuarioDAO;
    $array = $usuarioDAO->buscaUsuarios();
    $truncated = sizeof($array) == 0;

    if($truncated)
        header('Location: .');
    ?>

    <header>
        <h1>IF Maker &#9881;</h1>
        <h2>Laboratório de fabricação <abbr title="Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul">IFMS</abbr> Aquidauana
        </h2>
    </header>

    <main class="container">
        <div style="overflow-x: auto">
            <table>
                <thead>
                    <tr>
                        <?php foreach ($array[0]->toArray() as $atributo => $valor) { ?>
                        <td><b><?= corrige($atributo) ?></b></td>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < sizeof($array); ++$i) { ?>
                    <tr>
                        <?php foreach ($array[$i]->toArray() as $atributo => $valor) { ?>
                        <td><?= $valor ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php
        $enderecoDAO = new EnderecoDAO;
        $array = $enderecoDAO->buscaEnderecos();
        $truncated = sizeof($array) == 0;

        if ($truncated)
            header('Location: .');
        ?>

        <div style="overflow-x: auto">
            <table>
                <thead>
                    <tr>
                        <?php foreach ($array[0]->toArray() as $atributo => $valor) { ?>
                        <td><b><?= corrige($atributo) ?></b></td>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < sizeof($array); ++$i) { ?>
                    <tr>
                        <?php foreach ($array[$i]->toArray() as $atributo => $valor) { ?>
                        <td><?= $valor ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <aside>
            <ul class="links">
                <li><a href=".">Nossos serviços</a></li>
                <li><a href="./formulario.php">Cadastro</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="http://ifms.edu.br/" target="_blank">Site do IFMS</a></li>
            </ul>
        </aside>

        <div role="footer">
            <span role="copyright">&copy; Hiroshi & Matheuszinho 2019</span>
        </div>
    </footer>
</body>

</html>