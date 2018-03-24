<?php

  require 'logger.php';

  class Model {
    const HOST = 'localhost';
    const USER_NAME = 'debian-sys-maint';
    const USER_PASSWORD = 'chVB6qQZRsfONd1E';
    private $logger;
    private $connect;

    public function __construct(){
      $this -> logger = new Logger('logs.txt');
      $this -> connect = new mysqli(self::HOST, self::USER_NAME, self::USER_PASSWORD, $db_name);
    }

    public function selectAll($db_name, $table_name) {
      $connect = connect;
      $query = "SELECT * FROM `$table_name`;";
      $message = $connect -> query($query) ? "Показана" : 'НЕ Показана';
      $this -> logger -> log("Таблица $table_name в базе $db_name " . $message);
    }

    public function destroyAll($db_name, $table_name) {
      $connect = connect;
      $query = "DELETE FROM `$table_name`;";
      $message = $connect -> query($query) ? "Удалены" : 'НЕ Удалены';
      $this -> logger -> log("ВСЕ Данный в Таблице $table_name в базе $db_name " . $message);
    }

    public function find($table_name, $id) {
      $connect = connect;
      $query = "SELECT * FROM `$table_name` WHERE id=$id;";
      $message = $connect -> query($query) ? "$id" : 'не ок';
      $this -> logger -> log("Таблица $table_name в базе $db_name " . $message);
    }

    public function createIn($db_name, $table_name, $fields_arr) {
      $connect = connect;
      $query ="INSERT INTO `$table_name` (";
      foreach ($fields_arr as $field_name => $field_info) {
        $field_query = $field_name . ') ' . VALUES . ' (' . $field_info["id"] ;
        $query .= $field_query;
      }
      $query .= ");";
      var_dump($query);
      $message = $connect -> query($query) ? "Записана" : "Не Записана";
      $this -> logger -> log("Запись в Таблицу $table_name в БД $db_name " . $message);
    }

    public function destroy($db_name, $table_name, $fields_arr) {
      $connect = connect;
      $query ="DELETE FROM `$table_name` ";
      foreach ($fields_arr as $field_name => $field_info) {
        $field_query = WHERE . `$table_name` . ' id ' . ' = ' . $field_info['id'];
        $query .= $field_query;
    }
    $query .= ";";
    // var_dump($query);
    $message = $connect -> query($query) ? "Удалина" : "Не Удалина";
    $this -> logger -> log("ЗАПИСЬ в ТаблицЕ $table_name в БД $db_name " . $message);
    }
  }

?>
