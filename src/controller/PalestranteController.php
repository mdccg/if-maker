<?php
require_once './../connection/ConnectionFactory.php';
require_once './../dao/PalestranteDao.php';
require_once './../model/Palestrante.php';

$palestrante = Array('id' => uniqid(''));

foreach($_POST as $chave => $valor) {
    $palestrante{$chave} = $valor;
}

$palestrante = new Palestrante($palestrante);
$palestranteDao = new PalestranteDao;
$palestranteDao->createPalestrante($palestrante);

header('Location: ./../../?cadastrado=true');
exit;
?>