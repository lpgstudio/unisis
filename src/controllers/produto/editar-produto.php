<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;

$_SESSION['error'] = $erro;

$dados['id'] = filter_var(@$_POST['produto_id'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['user_id'] = $id;
$dados['marca_id'] = filter_var(@$_POST['marca'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['nome'] = filter_var(@$_POST['nome'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['ean'] = filter_var(@$_POST['codigo-de-barras'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['estoque'] = filter_var(@$_POST['estoque'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['estoque_min'] = filter_var(@$_POST['estoque_min'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['valor_custo'] = filter_var(@$_POST['valor-custo'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['valor_venda'] = filter_var(@$_POST['valor-venda'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['data_compra'] = filter_var(@$_POST['data-compra'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['validade'] = filter_var(@$_POST['data-validade'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['estimativa'] = filter_var(@$_POST['estimativa'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);

print_r($dados);

try{
    $cadastrar = Produto::createProduct($dados);
    header('Location: ../dashboard.php');
}catch(Exception $e){
    echo $e->getMessage();
    $erro = $e->getMessage();
}
// loadTemplateView('dashboard' , ['produtos' => $dados]);
