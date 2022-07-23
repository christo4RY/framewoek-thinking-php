<?php

class QueryBuilder{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insert($dataArr,$table){
        $strArr = implode(',',array_keys($dataArr));;
        $questMark = "";
        foreach($dataArr as $key){
            $questMark.= "?,";
        }
        $questMark = rtrim($questMark,",");
        $str = array_values($dataArr);

        $sql = "insert into $table ($strArr) values ($questMark)";
        $statement= $this->pdo->prepare($sql);
        $statement->execute($str);
    }
}