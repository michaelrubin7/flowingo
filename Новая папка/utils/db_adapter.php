<?php
  require_once('logger.php');
  require_once('../configurations.php');

  class DBAdapter{
    private $logger;

    public function __construct(){
      $this -> logger = new Logger('logs.txt');
    }

    public function createDatabase(){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST, USER_NAME, USER_PASSWORD);
      $query = "CREATE DATABASE IF NOT EXISTS `$db_name`;";
      $connect -> query($db_name);
      $logger = new Logger('logs.txt');
      $message = $connect -> query($query) ? "База $db_name создана!" : "База $db_name ne создана!" . "<br>";
      $logger -> log($message);
    }

    public function createTable($table_name, $fields_arr){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST,  USER_NAME, USER_PASSWORD, $db_name);
      $query ="CREATE TABLE IF NOT EXISTS `$table_name` (";
      foreach ($fields_arr as $field_name => $field_info) {
        $field_query = $field_name . ' ' .
        $field_info['type'] .
        $this -> checkUnsigned($field_info['unsigned']) .
        $this -> checkAI($field_info['AI']) .
        $this -> checkNotNull($field_info['not_null']) .
        $this -> checkPrymary($field_info['PK']);
        $query .= $field_query. ', ';
      }
      $query = rtrim($query, ', ') . ');';
      // $query .= ");";
      $message = $connect -> query($query) ? "Создана" : "Не Создана";
      $this -> logger -> log("Таблица $table_name в БД $db_name " . $message);
      // $query ="CREATE TABLE IF NOT EXISTS `goods`(id int(8), UNSIGNED, AUTO_INCREMENT, NOT NULL, PRIMARY KAY) ";
    }

    private function checkAI($ai){
      return $ai ? ' AUTO_INCREMENT ' : '';
    }

    private function checkDefault($defaul_value){
      return $defaul_value ? " DEFAULT $defaul_value" : '';
    }

    private function checkNotNull($not_null){
      return $not_null ? " NOT NULL" : '';
    }

    private function checkUnsigned($unsigned){
      return $unsigned ? " UNSIGNED" : '';
    }

    private function checkPrymary($prymary){
      return $prymary ? " PRIMARY KEY" : '';
    }

    public function dropTable($table_name){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST, USER_NAME, USER_PASSWORD, $db_name);
      $query = "DROP TABLE IF EXISTS $table_name;";
      $message = $connect -> query($query) ? "удалена" : 'не удалена';
      $this -> logger -> log("Таблица $table_name в базе $db_name " . $message);
    }
  }

?>
