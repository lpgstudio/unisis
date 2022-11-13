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

    public static function upDateClient($user_id, $cli_id, $dados = []){
        $conn = Database::getConnection();
        $sql = "UPDATE " . self::$tableName . " SET nome = ?, email = ?, telefone = ?, endereco = ?, numero = ?, complemento = ?, bairro = ?, cidade = ?, birthday = ? WHERE user_id = ? AND id = ?";

        $stmt = $conn->prepare($sql);
        $params = [
            $dados['nome'],
            $dados['email'],
            $dados['telefone'],
            $dados['endereco'],
            $dados['numero'],
            $dados['complemento'],
            $dados['bairro'],
            $dados['cidade'],
            $dados['birthday'],
            $user_id,
            $cli_id
        ];

        $stmt->bind_param("ssssissssii", ...$params);
        if($stmt->execute()){
            addSuccessMsg("Cliente atualizado com sucesso!");
            unset($dados);
        }else{
            addErrorMsg('Error: '. $conn->error);
        }

    }

    public static function deleteClient($user_id, $cli_id){
        $sql = "DELETE FROM " 
            . static::$tableName . " WHERE user_id = " . $user_id ." AND id = " . $cli_id;
        Database::executeSQL($sql);
        addSuccessMsg('Cliente deletado com sucesso.');
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

    public static function getOneClient($user_id, $cli_id){
        $objects = [];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM " . self::$tableName . " WHERE user_id = ". $user_id . " AND id = " . $cli_id;

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

    public static function getRote($user_id, $client_end = []){
        if($user_id == $_SESSION['user']->id){

            $endTratado = str_replace(' ', '+', $client_end['endereco']);
            $endTratado .= ",+".$client_end['numero'];
            $endTratado .= "+" .str_replace(' ', '+', $client_end['bairro']);
            $endTratado .= "+-+".str_replace(' ', '+', $client_end['cidade']);

            return "https://www.google.com.br/maps/place/".$endTratado;
        }
        return "Erro ao processar os dados.";
    }

    public static function getWhats($user_id, $client_fone){
        if($user_id == $_SESSION['user']->id){

            $endTratado = str_replace(' ', '+', $client_fone);

            return "https://www.google.com.br/maps/place/".$endTratado;
        }
        return "Erro ao processar os dados.";
    }


    // ...
}