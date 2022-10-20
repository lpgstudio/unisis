<?php

if(isset($_POST)){

    $email = filter_var($_POST['create_email'], FILTER_SANITIZE_EMAIL);
    if(!filter_var($_POST['create_email'], FILTER_SANITIZE_EMAIL) === false && $email != "" && $email != " "){
        $email_valid = $email;
    }
    $username = filter_var($_POST['create_username'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    if($username != "" && $username != " "){
        $username_valid = $username;
    }

    if($username_valid !== "" && $username_valid !== " " && $email_valid !== "" && $username_valid !== " "){
        $dados['id'] = '';
        $dados['username'] = $username_valid;
        $dados['email'] = $email_valid;
        $dados['password'] = password_hash($_POST['create_password'], PASSWORD_DEFAULT);
        $dados['permissao'] = 1;
        $dados['create_time'] = date('Y-m-d H:i:s');
        
        try{
            $cadastrar = User::createAccount($dados);
            addSuccessMsg('Usuário criado com sucesso!');
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        header('Location: login.php');
    }else{  
        addErrorMsg('Dados inválidos');
    }
}