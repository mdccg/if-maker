<?php
require_once './../connection/ConnectionFactory.php';

require_once './../dao/EventoDao.php';
require_once './../dao/InscricaoDao.php';

require_once './../model/Inscricao.php';

if($_GET['update'] == 'true') {
    // unset($_POST['evento_id']); # desconsiderando evento por enquanto

    $inscricao = Array();

    foreach($_POST as $chave => $valor)
        $inscricao{$chave} = $valor;
    
    $inscricao = new Inscricao($inscricao);

    $inscricaoDao = new InscricaoDao;
    $inscricaoDao->updateInscricao($inscricao);

    header('Location: ./../../?updated=true');
    exit;
}

function _isset() {
    $n = 0;
    $N = sizeof($_POST);
    
    foreach($_POST as $chave => $valor)
        $n += strlen($_POST["$chave"]) != 0;

    return $n == $N;
}

function cadastraInscrito() {
    $inscricao = Array(
        'id' => uniqid(''),
        'data_inscricao' => date('Y-m-d h:i:s')
    );
    
    foreach($_POST as $chave => $valor) {
        $inscricao{$chave} = $valor;
    }

    $evento_id = $inscricao['evento_id'];
    unset($inscricao['evento_id']);

    $inscricao = new Inscricao($inscricao);

    $eventoDao = new EventoDao;
    $inscricaoDao = new InscricaoDao;

    $eventoDao->relaciona(
        $inscricao->getId(),
        $evento_id
    );

    return $inscricaoDao->createInscricao($inscricao);
}

if(!_isset()) {
    header('Location: ./../../?cadastrado=false');
    exit;
}

cadastraInscrito();
header('Location: ./../../?cadastrado=true');
?>