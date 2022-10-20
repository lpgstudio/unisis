<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;

$_SESSION['error'] = $erro;

$dados['id'] = "";
$dados['user_id'] = $id;
$dados['nome'] = filter_var(@$_POST['nome'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

print_r($dados);

try{
    $cadastrar = Marca::createMarca($dados);
    header('Location: ../dashboard.php');
}catch(Exception $e){
    echo $e->getMessage();
    $erro = $e->getMessage();
}
// loadTemplateView('dashboard' , ['produtos' => $dados]);
