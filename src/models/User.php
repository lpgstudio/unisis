<?php

class User extends Model{
    protected static $tableName = 'user';
    protected static $columns = [
        "id",
    ];

    public static function createAccount($dados = []){
        $conn = Database::getConnection();
        $sql = "INSERT INTO " . self::$tableName . " ("
            . implode(",", self::$columns). ") VALUES (?,?)";
        
        $stmt = $conn->prepare($sql);
        $params = [
            $dados[''],
        ];

        $stmt->bind_param("i",...$params);
        if($stmt->execute()){
            addSuccessMsg('Conta criada com sucesso!');
            unset($dados);
        }else{
            echo "Error: " . $conn->error;
        }
    }

    // ...
}