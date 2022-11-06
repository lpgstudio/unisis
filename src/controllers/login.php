<?php

loadModel('Login');
session_start();
$exception = null;

if(count($_POST) > 0){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(!filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) === false && $email != "" && $email != " "){
        $dados = array('email' => $email, 'password' => $_POST['password']);
        $login = new Login($dados);
        try{
            $user = $login->checkLogin();
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
        } catch(AppException $e){
            $exception = $e; 
        }
    }
}

loadView('login', ['exception' => $exception]);