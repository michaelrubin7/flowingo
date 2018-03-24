<?php

  class Logger{
    private $file_name;
    const LOG_FOLDER_PATH = __DIR__ . '/logs/';

    public function __construct($file_name) {
      $this -> file_name = $file_name;
    }
    public function log($message) {
      $this -> createLogDir();
      $file = fopen(self::LOG_FOLDER_PATH . $this -> file_name, 'a+');
      $message = date('[Y-m-d H:i:s] - ') . $message;
      fwrite($file, $message . "\n");
      fclose($file);
      // var_dump(createLogDir());
    }

    private function createLogDir()
    {
      if (!file_exists(self::LOG_FOLDER_PATH)) {
        mkdir(self::LOG_FOLDER_PATH);
        chmod(self::LOG_FOLDER_PATH, 0777);
      }
    }
  }




?>
