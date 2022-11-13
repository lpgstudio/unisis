<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$nome = $_SESSION['user']->username;

$produtos = Produto::getAll($user_id);
$estoque = Produto::getBaixoEstoque($user_id);
$clientes = Cliente::getAll($user_id);

$totalCusto = 0;
$totalVenda = 0;
$totalLucro = 0;
$totalItens = 0;

foreach ($produtos as $produto){
    $totalProd = floatval($produto['valor_custo']) * floatval($produto['estoque']);
    $totalVend = floatval($produto['valor_venda']) * floatval($produto['estoque']);
    $totalCusto += $totalProd;
    $totalVenda += $totalVend;

    $totalItens += floatval($produto['estoque']);
}

$totalLucro = $totalVenda - $totalCusto;

loadTemplateView('dashboard', [
    'nome' => $nome,
    'produtos' => $produtos,
    'estoque' => $estoque,
    'clientes' => $clientes,
    'custo' => $totalCusto,
    'venda' => $totalVenda,
    'lucro' => $totalLucro,
    'qntEstoque' => $totalItens,
]);