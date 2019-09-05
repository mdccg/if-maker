<?php
require_once './../dao/InscricaoDAO.php';
require_once './../model/Inscricao.php';

$array = Array( # dados fictícios
    'nome' => 'Fábio Silva',
    'data_inscricao' => date('Y-m-d'),
    'email' => 'fabio.silva@ifms.edu.br',
    'evento' => 0,
    'cpf' => '00000000000',
    'rg' => '0000000',
    'orgao_emissor' => 'SEJUSP/SP',
    'naturalidade' => 'Brasileiro',
    'data_nascimento' => '1978-12-09'
);

$inscricaoDAO = new InscricaoDAO;
$inscricao = new Inscricao($array);
$inscricaoDAO->createInscricao($inscricao); # FIXME
?>
