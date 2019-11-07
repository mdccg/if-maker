<?php
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
?>