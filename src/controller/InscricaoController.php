<?php
require_once './../connection/ConnectionFactory.php';
require_once './../dao/InscricaoDao.php';
require_once './../model/Inscricao.php';

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

    unset($inscricao['evento_id']); # TODO inscricao_evento

    $inscricao = new Inscricao($inscricao);

    $inscricaoDao = new InscricaoDao;
    $inscricaoDao->createInscricao($inscricao);
}

if(!_isset())
    header('Location: ./../../?cadastrado=false');
else {
    cadastraInscrito();
    header('Location: ./../../?cadastrado=true');
}
?>