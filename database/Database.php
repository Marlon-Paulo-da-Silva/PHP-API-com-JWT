<?php

  class Database{
    private $host = "localhost";
    private $database = "php_api_jwt";
    private $user = "root";
    private $password = "";

    private $mysqli = "";
    private $result = array();
    private $conn = false;

    // conectando ao banco de dados usando contruct
    public function __construct()
    {
      if(!$this->conn){
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
        $this->conn = true;

        if($this->mysqli->connect_error){
          array_push($this->result, $this->mysqli->connect_error);
          return false;
        }

      } else {
        return true;
      }
    }

    public function tableExist($table){
      $sql = "SHOW TABLES FROM $this->database
      LIKE '{$table}";
      $tableInDb = $this->mysqli->query($sql);
      if($tableInDb){
        if($tableInDb->num_rows() == 1){
          
        }
      }
    }

    public function getResult(){
      $val = $this->result;
      $this->result =  array();
      return $val;
    }

    public function __destruct()
    {
      if($this->conn){
        if($this->mysqli->close()){
          $this->conn = false;
        }
      } else {
        return false;
      }
    }
  }
?>