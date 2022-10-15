<!-- Model -->
<?php

class Produto extends Model{
    protected static $tableName = 'produto';
    protected static $columns = [
        "id",
        "user_id",
        "marca_id",
        "nome",
        "ean",
        "estoque",
        "valor_custo",
        "valor_venda",
        "data_compra",
        "validade",
        "estimativa",
    ];

    public static function createProduct($dados = []){
        $conn = Database::getConnection();
        $sql = "INSERT INTO " . self::$tableName ." (". implode(",", self::$columns). ") VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $params = [
            $dados['id'],
            $dados['user_id'],
            $dados['marca_id'],
            $dados['nome'],
            $dados['ean'],
            $dados['estoque'],
            $dados['valor_custo'],
            $dados['valor_venda'],
            $dados['data_compra'],
            $dados['validade'],
            $dados['estimativa'],
        ];

        $stmt->bind_param("iiississssi", ...$params);
        if($stmt->execute()){
            addSuccessMsg("Produto cadastrado com sucesso!");
            unset($dados);
        }else{
            addErrorMsg('Error: '. $conn->error);
            echo "Error: ". $conn->error;
        }
    }

    public static function getAll($user_id){
        $objects = [];
        $sql = "SELECT * FROM " . self::$tableName . " WHERE user_id = " .$user_id;

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