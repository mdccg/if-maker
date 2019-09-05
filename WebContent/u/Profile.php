<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    require_once '../../src/connection/ConnectionFactory.php';
    require_once '../../src/dao/UsuarioDAO.php';
    require_once '../../src/model/Usuario.php';

    function correcao($atributo) {
        switch($atributo) {
            case 'email':
                return 'E-mail';
            
            case 'id':
            case 'cpf':
            case 'rg':
                return strtoupper($atributo);
            
            case 'oe':
                return 'Órgão emissor';
            
            case 'data_nascimento':
                return 'Data de nascimento';
            
            default:
                return ucfirst($atributo);
        }
    }

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;
    
    $usuarioDAO = new UsuarioDAO;
    $usuario = $usuarioDAO->readUsuario($id);
    if($usuario->getId() != $id) header('Location: ../index.html');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/perfil.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title><?= $usuario->getNome() ?> &#x2015; IF Maker</title>
</head>
<body>
    <header>
        <nav class="container">
            <ul>
                <li><a href="../#home">Home</a></li>
                <li><a href="../#o-q-eh">O que é?</a></li>
                <li><a href="../#quem-somos">Quem somos</a></li>
                <li><a href="../#equip">Equipamentos</a></li>
                <li><a href="../#inscricoes">Inscrições IF Maker</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="bkgd1">
        <section>
            <div class="perfil">
                <h3>Dados do usuário</h3>

                <div class="bordinha" style="background-color: var(--cinza)">&nbsp;</div>

                <dl>
                    <?php foreach($usuario->toAssoc() as $atributo => $valor) { ?>

                    <div class="atributo">
                        <dt><?= correcao($atributo) ?></dt>
                        <dd><?= $valor ?></dd>
                    </div>
                    
                    <?php } ?>
                
                </dl>
            </div>
        </section>
    </main>

    <footer>&copy; IF Maker 2019. Criado orgulhosamente sem Wix.com</footer>
</body>
</html>