<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$nome = $_SESSION['user']->username;

$produtos = Produto::getAll($user_id);
$estoque = Produto::getBaixoEstoque($user_id);
$clientes = Cliente::getAll($user_id);

loadTemplateView('dashboard', [
    'nome' => $nome,
    'produtos' => $produtos,
    'estoque' => $estoque,
    'clientes' => $clientes
]);