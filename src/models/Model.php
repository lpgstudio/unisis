<?php

class Model{
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    function __construct($arr){
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr){
        if($arr){
            foreach($arr as $key => $value){
                $this->$key = $value;
            }
        }
    }

    public function __get($key){
        return $this->values[$key];
    }

    public function __set($key, $value){
        $this->values[$key] = $value;
    }

    // busca unica
    public static function getOne($filters = [], $columns = '*'){
        $class = get_called_class();
        $result = static::getResultSetFromSelect($filters, $columns);

        return $result ? new $class($result->fetch_assoc()) : null;
    }

    // busca mais de um
    public static function get($filters = [], $columns = '*'){
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);
        if($result){
            $class = get_called_class();
            while($row = $result->fetch_assoc()){
                array_push($objects, new $class($row));
            }
        }

        return $objects;
    }

    // Query da busca
    public static function getResultSetFromSelect($filters = [], $columns = '*'){
        $sql = "SELECT ${columns} FROM "
            . static::$tableName
            . static::getFilters($filters);
        
        $result = Database::getResultFromQuery($sql);
        if($result->num_rows === 0){
            return null;
        }else{
            return $result;
        }
    }

    // Query Inserir dados
    public static function insert(){
        $sql = "INSERT INTO "
            . static::$tableName
            . " (" . implode(",", static::$columns) . ") VALUES (";
        foreach(static::$columns as $col){
            $sql .= static::getFormatedValues($col) . ",";
        }

        $sql[strlen($sql) -1] = ")";
        $id = Database::executeSQL($sql);
        // $this->id = $id;
    }

    // Query Atualiza dados
    public function updade(){
        $sql = "UPDATE " . static::$tableName . " SET ";
        foreach(static::$columns as $col){
            $sql .= " ${col} = " . static::getFormatedValues($this->$col) . ",";
        }

        $sql[strlen($sql) -1] = " ";
        $sql .= "WHERE id = {$this->id}";
        Database::executeSQL($sql);
    }

    // Tratando m??ltiplos filtros
    private static function getFilters($filters){
        $sql = '';

        if(count($filters) > 0 ){
            $sql .= " WHERE 1 = 1";
            foreach($filters as $column => $value){
                if($column == "raw"){
                    $sql .= " AND {$value}";
                }else {
                    $sql .= " AND ${column} = " . static::getFormatedValues($value);
                }
            }
        }

        return $sql;
    }

    // Formatando os valores
    public static function getFormatedValues($value){
        if(is_null($value)){
            return "NULL";
        }elseif(gettype($value) === "string"){
            return "'${value}'";
        }else{
            return $value;
        }
    }
}