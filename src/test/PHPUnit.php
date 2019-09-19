<?php
require_once './../connection/ConnectionFactory.php';
require_once './../dao/EventoDAO.php';
require_once './../dao/InscricaoDAO.php';
require_once './../dao/PalestranteDAO.php';
require_once './../model/Evento.php';
require_once './../model/Inscricao.php';
require_once './../model/Palestrante.php';

function cadastraInscrito() {
    $inscricao = Array(
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
    
    $inscricao = new Inscricao($inscricao);
    
    $inscricaoDAO = new InscricaoDAO;
    $inscricaoDAO->createInscricao($inscricao);
}

function cadastraPalestrante() {
    $palestrante = Array(
        'id' => uniqid(''),
        'nome' => 'Mário Sá',
        'email' => 'mario.sa@ufgd.edu.br',
        'cpf' => '11111111111',
        'rg' => '1111111',
        'orgao_emissor' => 'SEJUSP-SP',
        'naturalidade' => 'Brasileiro',
        'data_nascimento' => '1889-04-16'
    );

    $palestrante = new Palestrante($palestrante);

    $palestranteDAO = new PalestranteDAO;
    $palestranteDAO->createPalestrante($palestrante);
}

function criaEvento() {
    $palestranteDAO = new PalestranteDAO;
    $palestrante = $palestranteDAO->readPalestrantes()[0]; # 1.o palestrante

    $evento = Array(
        'id' => uniqid(''),
        'titulo' => 'Todo camburão tem um pouco de navio negreiro',
        'data_evento' => '2019-09-18 13:00:00',
        'palestrante_id' => $palestrante->getId()
    );

    $evento = new Evento($evento);

    $eventoDAO = new EventoDAO;
    $eventoDAO->createEvento($evento);
}

function listaInscricoes() {
    $inscricaoDAO = new InscricaoDAO;
    $inscricoes = $inscricaoDAO->readInscricoes();
    return $inscricoes;
}

function listaPalestrantes() {
    $palestranteDAO = new PalestranteDAO;
    $palestrantes = $palestranteDAO->readPalestrantes();
    return $palestrantes;
}

function listaEventos() {
    $eventoDAO = new EventoDAO();
    $eventos = $eventoDAO->readEventos();
    return $eventos;
}

# cadastraInscrito();
# cadastraPalestrante();
# criaEvento();
?>
<pre><?php print_r(listaInscricoes()) ?></pre>
<pre><?php print_r(listaPalestrantes()) ?></pre>
<pre><?php print_r(listaEventos()) ?></pre>
