<?php
class Database{
  public $tablename;
  function __construct($tablename){
    $this->tablename = $tablename;
    $this->pdo=new PDO('mysql:host=localhost;dbname=multimate;charset=utf8','santosh','MysqlkoPass.99',
		array(PDO::ATTR_EMULATE_PREPARES => false, PDO::  ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  function save($record, $pk = ''){
	    try{
	        $this->insert($record);
	    }
	    catch(Exception $e){
	        $this->update($record, $pk);
	    }
	}

  function insert($data){
    $keys = array_keys($data);
    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :',$keys);
    $query = 'INSERT INTO '.$this->tablename.'('.$values.') VALUE(:'.
    $valuesWithColon.')';
    echo $query;
    $stmt = $this->pdo->prepare($query);
    $stmt->execute($data);
  }

  function update($data,$primarykey){
    $param = [];
    foreach ($data as $key => $value) {
      $param[] = $key . '= :' . $key;
    }
    $paramwithComma = implode(', ',$param);
    $query = "UPDATE $this->tablename SET $paramwithComma WHERE $primarykey = :pk";
    $data['pk'] = $data[$primarykey];
    $stmt = $this->pdo->prepare($query);
    $stmt->execute($data);
}
    function find($key,$value){
      $stmt = $this->pdo->prepare('SELECT * FROM '.$this->tablename.' WHERE '.$key.'=:value');
      $stmt->bindValue('value',$value);
      $stmt->execute();
      return $stmt;
    }

    function findAll(){
      $allData = $this->pdo->prepare('SELECT * FROM '.$this->tablename);
      $allData->execute();
      return $allData;
    }

    function delete($key,$value){
      $delete = $this->pdo->prepare("DELETE FROM $this->tablename WHERE $key = :pk");
      $delete->bindValue('pk',$value);
      $delete->execute();
      return $delete;
    }
    function lastInsertId(){
      return $this->pdo->lastInsertId();
    }

  }


?>
