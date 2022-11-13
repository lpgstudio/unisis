<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$cli_id = filter_var($_REQUEST['codigo'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$marcas = Marca::getAll($user_id);

$listaClientes = Cliente::getOneClient($user_id, $cli_id);

loadTemplateView('editar-clientes', [
    'editClientList' => $listaClientes
]);