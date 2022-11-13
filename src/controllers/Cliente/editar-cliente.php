<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;
   
$dados['id'] = filter_var(@$_POST['cliente_id'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['user_id'] = $id;
$dados['nome'] = filter_var(@$_POST['nome'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['email'] = filter_var(@$_POST['email'], FILTER_SANITIZE_EMAIL);
$dados['telefone'] = filter_var(@$_POST['telefone'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['endereco'] = filter_var(@$_POST['endereco'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['numero'] = filter_var(@$_POST['numero'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['complemento'] = filter_var(@$_POST['complemento'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['bairro'] = filter_var(@$_POST['bairro'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['cidade'] = filter_var(@$_POST['cidade'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['birthday'] = filter_var(@$_POST['aniversario'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

$cli_id= $dados['id'];

// print_r($_POST['cliente_id']);
try{
    $cadastrar = Cliente::upDateClient($id, $cli_id, $dados);
}catch(Exception $e){
    echo $e->getMessage();
}

// loadTemplateView('criar-cliente' , ['teste' => $dados]);
header('Location: ../dashboard.php');