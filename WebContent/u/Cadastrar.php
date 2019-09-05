<?php
$isset = isset($_POST);
if(!$isset)
    header('Location: ../index.html');

require_once '../../src/connection/ConnectionFactory.php';
require_once '../../src/dao/UsuarioDAO.php';
require_once '../../src/model/Usuario.php';

$usuarioDAO = new UsuarioDAO;

$array = $usuarioDAO->readUsuarios();
$id = sizeof($array) + 1;
$_POST['id'] = $id;

// TODO
unset($_POST['curso']);
unset($_POST['horario']);

$usuario = new Usuario($_POST);
$usuarioDAO->createUsuario($usuario);
header('Location: Profile.php?id=' . $usuario->getId() );
?>