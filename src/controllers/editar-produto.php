<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$produto = filter_var($_REQUEST['codigo'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$marcas = Marca::getAll($user_id);
$listProdutos = Produto::getOneProduct($user_id, $produto);
// $listProdutos = Produto::getOneProduct(1, 3);


loadTemplateView('editar-produtos', [
    'marcas' => $marcas,
    'produto' => $produto,
    'editProductList' => $listProdutos
]);