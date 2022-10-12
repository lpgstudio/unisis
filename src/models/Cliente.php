<?php 

class Cliente extends Model{
    protected static $tableName = 'cliente';
    protected static $columns = [
        "id",
        "user_id",
        "nome",
        "email",
        "telefone",
        "endereco",
        "numero",
        "complemento",
        "bairro",
        "cidade",
        "birthday"
    ];

    public static function createClient($dados = []){
        $conn = Database::getConnection();
        $sql = "INSERT INTO " . self::$tableName . " (" . implode(",", self::$columns). ") VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $params = [
            $dados['id'],
            $dados['user_id'],
            $dados['nome'],
            $dados['email'],
            $dados['telefone'],
            $dados['endereco'],
            $dados['numero'],
            $dados['complemento'],
            $dados['bairro'],
            $dados['cidade'],
            $dados['birthday'],
        ];

        $stmt->bind_param("iissssissss", ...$params);
        if($stmt->execute()){
            addSuccessMsg('Cliente cadastrado com sucesso!');
            unset($dados);
        }else{
            addErrorMsg("Error: ".$conn->error);
            echo "Error: ".$conn->error;
        }
    }
    // ...
}