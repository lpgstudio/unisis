<?php

class User extends Model{
    protected static $tableName = 'user';
    protected static $columns = [
        "id",
        "username",
        "email",
        "password",
        "permissao",
        "create_time"
    ];

    public static function createAccount($dados = []){
        $conn = Database::getConnection();
        $sql = "INSERT INTO " . self::$tableName . " ("
            . implode(",", self::$columns). ") VALUES (?,?,?,?,?,?)";
        
        $stmt = $conn->prepare($sql);
        $params = [
            $dados['id'],
            $dados['username'],
            $dados['email'],
            $dados['password'],
            $dados['permissao'],
            $dados['create_time'],
        ];

        $stmt->bind_param("isssis",...$params);
        if($stmt->execute()){
            addSuccessMsg('Conta criada com sucesso!');
            unset($dados);
        }else{
            echo "Error: " . $conn->error;
        }
    }

    // ...
}