<?php
require_once './../connection/ConnectionFactory.php';
require_once './../dao/InscricaoDAO.php';
require_once './../model/Inscricao.php';

$assoc = Array(
    'id' => uniqid(''),
    'nome' => 'Fábio Luiz Silva',
    'data_inscricao' => date('Y-m-d h:i:s'),
    'email' => 'fabio.silva@ifms.edu.br',
    'cpf' => '00000000000',
    'rg' => '0000000',
    'orgao_emissor' => 'SEJUSP/SP',
    'naturalidade' => 'Brasileiro',
    'data_nascimento' => '1970-01-01'
);

$inscricao = new Inscricao($assoc);

$inscricaoDAO = new InscricaoDAO;
// $inscricaoDAO->createInscricao($inscricao);

$inscricoes = $inscricaoDAO->readInscricoes();
print_r($inscricoes);
?>