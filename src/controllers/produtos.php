<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;

$listaProdutos = Produto::getAll($user_id);

loadTemplateView('produtos', [
    'produtos' => $listaProdutos,
    'user' => $user_id,
]);