<?php

$dados['id'] = '';
$dados['username'] = filter_var($_POST['create_username'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['email'] = filter_var($_POST['create_email'], FILTER_SANITIZE_EMAIL);
$dados['password'] = password_hash($_POST['create_password'], PASSWORD_DEFAULT);
$dados['create_time'] = date('Y-m-d H:i:s');
$dados['last_login'] = null;
$dados['status'] = 1;

try{
    $cadastrar = User::createAccount($dados);
}catch(Exception $e){
    echo $e->getMessage();
}

header('Location: login.php');