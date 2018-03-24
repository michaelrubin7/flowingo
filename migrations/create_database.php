<?php
  require_once('../utils/db_adapter.php');

  // $adapter = new DBadapter();
  // $adapter -> createDatabase();
  DBAdapter::getInstance() -> createDatabase();

?>
