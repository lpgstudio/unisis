<?php

class Marca extends Model{
    protected static $tableName = 'marca';
    protected static $columns = [
        "id",
        "user_id",
        "nome",
    ];

    public static function createMarca($dados = []){
        $conn = Database::getConnection();
        $sql = "INSERT INTO " . self::$tableName ." (". implode(",", self::$columns). ") VALUES (?,?,?)";

        $stmt = $conn->prepare($sql);
        $params = [
            $dados['id'],
            $dados['user_id'],
            $dados['nome'],
        ];

        $stmt->bind_param("iis", ...$params);
        if($stmt->execute()){
            addSuccessMsg("Marca cadastrado com sucesso!");
            unset($dados);
        }else{
            addErrorMsg('Error: '. $conn->error);
            echo "Error: ". $conn->error;
            $_SESSION['error'] = $conn->error;
        }
    }

    public static function upDateMarca($user_id, $marca_id, $dados = []){
        $conn = Database::getConnection();
        $sql = "UPDATE " . self::$tableName . " SET nome = ? WHERE user_id = ? AND id = ?";

        $stmt = $conn->prepare($sql);
        $params = [
            $dados['nome'],
            $user_id,
            $marca_id
        ];

        $stmt->bind_param("sii", ...$params);
        if($stmt->execute()){
            addSuccessMsg("Marca atualizada com sucesso!");
            unset($dados);
        }else{
            addErrorMsg('Error: '. $conn->error);
        }

    }

    public static function deleteMarca($user_id, $marca_id){
        $sql = "DELETE FROM " 
            . static::$tableName . " WHERE user_id = " . $user_id ." AND id = " . $marca_id;
        Database::executeSQL($sql);
        addSuccessMsg('Marca deletada com sucesso.');
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

    public static function oneMarca($user_id, $marca_id){
        $objects = [];
        $sql = "SELECT * FROM " . self::$tableName . " WHERE user_id = " .$user_id . " AND id = " .$marca_id;

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