<?php
require_once '../dao/UsuarioDAO.php';
$usuarioDAO = new UsuarioDAO;
$array = $usuarioDAO->readUsuarios();
print_r($array);
?>
