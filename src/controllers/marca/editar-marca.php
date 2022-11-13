<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;

$dados['id'] = filter_var(@$_POST['marca_id'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['user_id'] = $id;
$dados['nome'] = filter_var(@$_POST['nome'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

print_r($dados);

$marca_id = $dados['id'];
try{
    $cadastrar = Marca::upDateMarca($id, $marca_id, $dados);
    header('Location: ../dashboard.php');
}catch(Exception $e){
    echo $e->getMessage();
    $erro = $e->getMessage();
}
// loadTemplateView('dashboard' , ['produtos' => $dados]);