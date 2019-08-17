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
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css">
    <link rel="shortcut icon" href="./favicon.ico">
    <title>Cadastro concluído &#x2015; IF Maker</title>
</head>

<body>
    <?php
    function _isset() {
        $preenchido = isset($_POST['enviar'])
            && strlen($_POST['nome']) != 0
            && strlen($_POST['email']) != 0
            && strlen($_POST['senha']) != 0
            && strlen($_POST['termos']) != 0;

        if(!$preenchido)
            header('Location: .');
    }

    function ignora($chave) {
        $chaves = ['senha', 'termos', 'enviar'];
        return in_array($chave, $chaves);
    }

    function corrige($chave) {
        switch ($chave) {
            case 'dataNascimento':
                return 'Data de nascimento';            
            
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
                return ucfirst($chave);
        }
    }

    function _corrige($chave, $valor) {
        if(strlen($valor) == 0)
            return NULL;

        switch($chave) {
        case 'Data de nascimento':
            $valor = strtotime($valor);
            return date('d/m/Y', $valor);
        
        case 'Histórico':
            return str_replace("\n", '<br>', $valor);
        
        default:
            return $valor;
        }
    }

    function persiste() {
        $usuario = Array(
            'cpf' => $_POST['cpf'],
            'nome' => $_POST['nome'],
            'data_nascimento' => $_POST['dataNascimento'],
            'email' => $_POST['email'],
            'celular' => $_POST['celular'],
            'nacionalidade' => $_POST['nacionalidade'],
            'naturalidade' => $_POST['naturalidade'],
            'historico' => $_POST['historico'],
            'poc' => $_POST['poc'],
            'hora' => $_POST['hora'],
            'eventos' => $_POST['eventos'],
            'senha' => $_POST['senha']
        );

        $endereco = Array(
            'logradouro' => $_POST['logradouro'],
            'numero' => $_POST['numero'],
            'complemento' => $_POST['complemento'],
            'bairro' => $_POST['bairro'],
            'cep' => $_POST['cep'],
            'estado' => $_POST['estado'],
            'cidade' => $_POST['cidade']
        );

        // TODO persistir dados
    }
    ?>
    
    <?php _isset($_POST); ?>

    <header>
        <h1>IF Maker &#9881;</h1>
        <h2>Laboratório de fabricação <abbr
                title="Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul">IFMS</abbr> Aquidauana
        </h2>
    </header>

    <main>
        <p>Usuário cadastrado com êxito!</p>

        <details>
            <summary>Dados do usuário</summary>

            <ul class="cadastro">
                <?php
                foreach ($_POST as $chave => $valor) {
                    $continua = ignora($chave);
                    
                    if($continua)
                        continue;

                    $chave = corrige($chave);
                    $valor = _corrige($chave, $valor);

                    if($valor == NULL)
                        continue;
                ?>

                <li>
                    <p><b><?= $chave ?></b>: <?= $valor ?></p>
                </li>
                <?php } ?>

            </ul>
        </details>
    </main>

    <footer>
        <aside>
            <ul class="links">
                <li><a href=".">Nossos serviços</a></li>
                <li><a href="./cadastrar.php">Cadastro</a></li>
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