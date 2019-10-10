<?php
require_once './../connection/ConnectionFactory.php';

require_once './../dao/EventoDao.php';
require_once './../dao/InscricaoDao.php';
require_once './../dao/PalestranteDao.php';

require_once './../model/Evento.php';
require_once './../model/Inscricao.php';
require_once './../model/Palestrante.php';

function cadastraInscrito() {
    $inscricao = Array(
        'id' => uniqid(''),
        'nome' => 'Fábio Luiz Faria da Silva',
        'data_inscricao' => date('Y-m-d h:i:s'),
        'email' => 'fabio.silva@ifms.edu.br',
        'cpf' => '00000000000',
        'rg' => '0000000',
        'orgao_emissor' => 'SEJUSP/SP',
        'naturalidade' => 'Brasileiro',
        'data_nascimento' => '1970-01-01'
    );
    
    $inscricao = new Inscricao($inscricao);
    
    $inscricaoDao = new InscricaoDao;
    $inscricaoDao->createInscricao($inscricao);
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

    $palestranteDao = new PalestranteDao;
    $palestranteDao->createPalestrante($palestrante);
}

function criaEvento() {
    $palestranteDao = new PalestranteDao;
    $palestrante = $palestranteDao->readPalestrantes()[2]; # 1.o palestrante

    $evento = Array(
        'id' => uniqid(''),
        'titulo' => 'Todo camburão tem um pouco de navio negreiro',
        'data_evento' => '2019-09-18 13:00:00',
        'palestrante_id' => $palestrante->getId()
    );

    $evento = new Evento($evento);

    $eventoDao = new EventoDao;
    $eventoDao->createEvento($evento);
}

function listaInscricoes() {
    $inscricaoDao = new InscricaoDao;
    $inscricoes = $inscricaoDao->readInscricoes();
    return $inscricoes;
}

function listaPalestrantes() {
    $palestranteDao = new PalestranteDao;
    $palestrantes = $palestranteDao->readPalestrantes();
    return $palestrantes;
}

function listaEventos() {
    $eventoDao = new EventoDao();
    $eventos = $eventoDao->readEventos();
    return $eventos;
}

function listaEventosPorInscrito() {
    $eventoDao = new EventoDao;
    $inscricaoDao = new InscricaoDao;

    $evento = listaEventos()[0]; # 1.0 evento
    $inscricao = listaInscricoes()[1]; # 2.o inscrito
    
    $eventoDao->relaciona($inscricao->getId(), $evento->getId());

    return $inscricaoDao->getEventosByInscricao($inscricao->getId());
}

# cadastraInscrito();
# cadastraPalestrante();
# criaEvento();
?>

<h2>Inscricao</h2>
<pre><?php print_r(listaInscricoes()) ?></pre>

<h2>Palestrante</h2>
<pre><?php print_r(listaPalestrantes()) ?></pre>

<h2>Evento</h2>
<pre><?php print_r(listaEventos()) ?></pre>