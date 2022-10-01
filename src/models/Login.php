<?php

class Login extends Model{

    // Validação do formulário
    public function validate(){
        $erros = [];

        if(!$this->email) {
            $erros['email'] = 'E-mail é um campo obrigatório.';
        }
        if(!$this->password) {
            $erros['password'] = 'Por favor, informe a senha.';
        }
        if(count($erros) > 0){
            throw new ValidationException($erros);
        }
    }

    // Validação de Login
    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if($user){
            // verificações do usuário

            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new AppException('Usuário ou senha inválido.');
    }
}