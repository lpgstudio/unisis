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

    public static function getAll($user_id){
        $objects = [];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM " . self::$tableName . " WHERE user_id = ". $user_id;

        $result = Database::getResultFromQuery($sql);
        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_assoc()){
                array_push($objects, $row);
            }
        }
        return $objects;
    }
    // ...
}