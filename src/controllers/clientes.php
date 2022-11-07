<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;

$listaClientes = Cliente::getAll($user_id);


loadTemplateView('clientes', [
    'clientes' => $listaClientes,
    'users' => $user_id
]);