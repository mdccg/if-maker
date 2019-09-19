<?php
require_once './../src/connection/ConnectionFactory.php';
require_once './../src/dao/InscricaoDao.php';
require_once './../src/dao/EventoDao.php';
require_once './../src/model/Inscricao.php';

$inscricao = Array(
    'id' => uniqid(''),
    'data_inscricao' => date('Y-m-d h:i:s')
);

foreach($_POST as $chave => $valor) {
    $inscricao{$chave} = $valor;
}

unset($inscricao['evento_id']);
$evento_id = $_POST['evento_id'];

$eventoDao = new EventoDao;
$inscricaoDao = new InscricaoDao;

$inscricao = new Inscricao($inscricao);
$inscricao_id = $inscricao->getId();

$inscricaoDao->createInscricao($inscricao);
$eventoDao->relaciona($inscricao_id, $evento_id);

header('Location: ./../');
?>