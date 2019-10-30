<?php
require_once './../connection/ConnectionFactory.php';
require_once './../dao/EventoDao.php';
require_once './../model/Evento.php';

$data_evento = substr($_POST['data_evento'], 0, 10) . " " . substr($_POST['data_evento'], 11, 5) . ":00";

$evento = Array(
    'id' => uniqid(''),
    'titulo' => $_POST['titulo'],
    'data_evento' => $data_evento,
    'palestrante_id' => '5d9e9557be2f4'
);

$evento = new Evento($evento);
$eventoDao = new EventoDao;
$eventoDao->createEvento($evento);
header('Location: ./../../?cadastrado=true');
?>